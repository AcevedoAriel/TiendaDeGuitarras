<?php

namespace App\Controllers;

use App\Models\producto_Model;
use App\Models\categoria_Model;

class Producto_Controller extends BaseController{

    public function agregar_producto(){
        $categoria = new categoria_Model();
        $data['categorias'] = $categoria->findAll();
        $data ['titulo'] = 'Agregar Producto';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/producto/agregar_producto_view');
        echo view('plantillas/footer_admin');
    }

    public function registrar_producto(){
        $request = \Config\Services::request();
        $rules = [
            //reglas de validación
            'nombre' => [
            'rules' => 'required',
            'errors'=>['required'=>'Nombre del producto es requerido']
            ],
            'descripcion' => [
            'rules' => 'required',
            'errors'=>['required'=>'Descripcion es requerido']
            ],
            'precio' => [
                'rules' => 'required|decimal',
                'errors'=>[ 'required'=>'El precio es requerido','decimal'=>'debe contener números']
            ],
            'imagen' => [
                'rules' => 'is_image[imagen]|uploaded[imagen]',
                'errors' => ['is_image'=>'la imagen no es valida','uploaded'=>'imagen es requerida']
            ],
            'stock' => [
                'rules' => 'required|numeric',
                'errors' => ['required'=>'Stock es requerido', 'numeric'=>'debe contener caracteres numéricos']
            ],
            'categoria' => [
                'rules' => 'is_not_unique[producto_categoria.categoria_id]',
                'errors' => ['is_not_unique'=>'Seleccione una categoria']
            ]
        ];

        $validations = $this->validate($rules);

        //si los datos son correctos entra en el if
        if($validations){

            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'public/assets/upload', $nombre_aleatorio);

            //a la izq va el nombre del campo de la bd y a la derecha el de rules
            $data =[
                'producto_nombre' => $request->getPost('nombre'),
                'producto_descripcion' => $request->getPost('descripcion'),
                'producto_precio' => $request->getPost('precio'),
                ///'producto_imagen' => $img->getName(),
                'producto_imagen' =>$nombre_aleatorio,
                'producto_stock' => $request->getPost('stock'),
                'producto_categoria' => $request->getPost('categoria'),
                'producto_estado'=> 1
            ];
            // conecta con la base de datos por el model
            $producto = new producto_Model();
            $producto->insert($data);

            if(!$producto){
                return redirect()->back()->with('fallo', 'algo salió mal!!');
            }else{
                return redirect()->to('agregar_producto')->with('correcto', 'Se ha agregado correctamente!!');
            }
        }else{
            //echo $data['validation']->listErrors();die;
            //error de validacion
            $categoria = new categoria_Model();
            $data['categorias'] = $categoria->findAll();
            $data['validation'] = $this->validator;
            $data ['titulo'] = 'Agregar Producto';
            echo view('plantillas/head',$data);
            echo view('plantillas/nav_admin');
            echo view('backEnd/producto/agregar_producto_view');
            echo view('plantillas/footer_admin');
        }
    }

    function gestionar_productos(){
        $categoria = new categoria_Model();
        $productos = new producto_Model();
        $data['categorias'] = $categoria->findAll();
        $data['producto'] = $productos->getProductoAll();
        $data['titulo'] = 'Gestionar Productos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/producto/gestionar_productos_view');
        echo view('plantillas/footer_admin');
    }

    public function listar_productos(){
	    $producto= new producto_model();
        $data['producto']=$producto->getProductoAll();
        $producto= new categoria_model();
	    $data['categorias'] = $producto->productoCategoria();

	    $data['titulo']='Listar Productos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/producto//listar_productos_view');
        echo view('plantillas/footer_admin');
	}

    function editar_producto($id=null){
        $categoria = new categoria_Model();
        $productos = new producto_Model();
        $data['categorias'] = $categoria->findAll();
        $data['producto'] = $productos->where('id_producto', $id)->first();
        $data['titulo'] = 'Editar producto';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/producto/editar_producto_view');
        echo view('plantillas/footer_admin');
    }

    function actualizar_producto($id=null){
        $request = \Config\Services::request();
        if ($request->getMethod(true)){
            $categoria= new categoria_Model();
            $data['categorias'] = $categoria->findAll();
            $producto = new producto_Model();
            $data['producto'] = $producto->where('id_producto', $id)->first();
                //validar datos ingresados
            
            $rules =[
                'nombre' => [
                    'rules' => 'required',
                    'errors'=>['required'=>'Nombre del producto es requerido']
                    ],
                'descripcion' => [
                    'rules' => 'required',
                    'errors'=>['required'=>'Descripcion es requerido']
                    ],
                'precio' => [
                        'rules' => 'required|decimal',
                        'errors'=>[ 'required'=>'El precio es requerido']
                    ],
                'imagen' => [
                        'rules' => 'is_image[imagen]',
                        'errors'=>[ 'is_image'=>'no es un archivo de imagen válido']
                    ],
                'stock' => [
                        'rules' => 'required|numeric',
                        'errors' => ['required'=>'Stock es requerido', 'numeric'=>'debe contener caracteres numéricos']
                    ],
                'categoria' => [
                        'rules' => 'is_not_unique[producto_categoria.categoria_id]',
                        'errors' => ['is_not_unique'=>'Seleccione una categoria']
                    ]
            ];
            $validations = $this->validate($rules);
            
            if($validations){
                $data = [
                    'producto_nombre' => $request->getPost('nombre'),
                    'producto_descripcion' => $request->getPost('descripcion'),
                    'producto_precio' => $request->getPost('precio'),
                    'producto_stock' => $request->getPost('stock'),
                    'producto_categoria' => $request->getPost('categoria'),
                    'producto_estado'=> 1
                ];

                //validar imagen
                $img = $this->request->getFile('imagen');
                if ($img->isValid()){
                    $rules=[
                        'imagen'=>'is_image[$img]|uploaded[$img]',
                    ];
                    $validations = $this->validate($rules);

                    $nombre_aleatorio = $img->getRandomName();

                    $img->move(ROOTPATH.'public/assets/upload', $nombre_aleatorio);
                    $data = [
                        'producto_imagen' => $img->getName(),
                    ];
                }

                $producto->update($id, $data);
                $session= session();
                $session -> setFlashdata('mensaje','Actualizo con exito');
                return redirect() -> route('gestionar');
            }else{
                //error al validar los datos
                $data['validation'] = $this->validator;
                
                $data['titulo'] = 'Editar producto';
                echo view('plantillas/head',$data);
                echo view('plantillas/nav_admin');
                echo view('backEnd/producto/editar_producto_view');
                echo view('plantillas/footer_admin');
            }
        }
    }

    public function activar_producto($id=null){
        $producto = new producto_Model();
        $data = array('producto_estado'=>'1');
        $producto->update($id, $data);
        return redirect()->route('gestionar');
    }

    public function eliminar_producto($id=null){
        $producto = new producto_Model();
        $data = array('producto_estado'=>'0');
        $producto->update($id, $data);
        return redirect()->route('gestionar');
    }

}