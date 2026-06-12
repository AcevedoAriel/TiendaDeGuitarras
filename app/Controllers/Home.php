<?php

namespace App\Controllers;
use App\Models\producto_Model;
use App\Models\categoria_Model;

class Home extends BaseController
{
    public function index(){
        $data ['titulo'] = 'Inicio';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/principal_view');
        echo view('plantillas/footer');
    }

    public function quienes_somos(){
        $data ['titulo'] = 'Quienes Somos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/quienes_somos_view');
        echo view('plantillas/footer');
    }

    public function comercializacion(){
        $data ['titulo'] = 'Comercializacion';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/comercializacion_view');
        echo view('plantillas/footer');
    }

    /*public function contacto(){
        $data ['titulo'] = 'Contacto';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/contacto_view');
        echo view('plantillas/footer');
    }*/

        public function terminos_y_usos(){
        $data ['titulo'] = 'Termino y Usos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/terminos_y_uso_view');
        echo view('plantillas/footer');
    }

    public function registro(){
        $data ['titulo'] = 'Registro';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/registro_view');
        echo view('plantillas/footer');
    }

    public function iniciar_sesion(){
        $data ['titulo'] = 'Inicio de Sesion';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/iniciar_sesion_view');
        echo view('plantillas/footer');
    }
    public function productos_cat(){
        $producto = new producto_Model();
        $data['producto'] = $producto->getProductoAll();
        $producto = new categoria_Model();
        $data['categorias'] = $producto->productoCategoria();
        $data ['titulo'] = 'Productos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/productos_cat_view');
        echo view('plantillas/footer');
    }

    public function filtrarPorCategoria($id=null){
        $request = \Config\Services::request();
        $id= $request->getPost('categoria');
        $categoria = new categoria_Model();
        $data['categorias'] = $categoria->findAll();
        $producto = new producto_Model();
        if($id=="0"){
            $data['producto'] = $producto->getProductoAll();
        }else{
            $data['producto'] = $producto->where('producto_categoria',$id)->findAll();
        }
        $data ['titulo'] = 'Productos';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/productos_cat_view');
        echo view('plantillas/footer');
    }

    public function GestionarPorCategoria($id=null){
        $request = \Config\Services::request();
        $id= $request->getPost('categoria');
        $categoria = new categoria_Model();
        $data['categorias'] = $categoria->findAll();
        $producto = new producto_Model();
        if($id=="0"){
            $data['producto'] = $producto->getProductoAll();
        }else{
            $data['producto'] = $producto->where('producto_categoria',$id)->findAll();
        }
        $data ['titulo'] = 'Productos por Categoria';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/producto/listar_productos_view');
        echo view('plantillas/footer_admin');
    }
    
}
