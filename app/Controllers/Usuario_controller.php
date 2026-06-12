<?php

namespace App\Controllers;

use App\Models\cliente_Model;


class Usuario_controller extends BaseController{
    /*****************************REGISTRAR CLIENTE**********************************************/
    public function registro(){
        $data ['titulo'] = 'Registro';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('contenidos/registro_view');
        echo view('plantillas/footer');
    }
    
    public function registrar_cliente(){
        //echo 'Datos enviado!'; die;
        $request = \Config\Services::request();
        $rules = [
            'nombre' => [
            'rules' => 'required|alpha_space',
            'errors'=>['required'=>'Su nombre es requerido','alpha_space'=>'Ingrese caracteres validos']
            ],
            'apellido' => [
            'rules' => 'required|alpha_space',
            'errors'=>['required'=>'Su apellido es requerido','alpha_space'=>'Ingrese caracteres validos']
            ],
            'dni' => [
                'rules' => 'required|is_natural',
                'errors'=>[ 'required'=>'Su DNI es requerido', 'is_natural'=>'Ingrese valores numericos']
            ],
            'pais' => [
                'rues' => 'required',
                'errors' => ['required'=>'Su Pais es requerido']
            ],
            'ciudad' => [
                'rules' => 'required',
                'errors' => ['required'=>'Su Ciudad es requerido']
            ],
            'direccion' => [
                'rules' => 'required',
                'errors' => ['required'=>'Su Direccion es requerido']
            ],
            'telefono' => [
                'rules' => 'required|is_natural',
                'errors' => ['required'=>'telefono es requerido','is_natural'=>'Ingrese valores numericos']
            ],
            'mail' => [
                'rules' => 'required|valid_email|is_unique[usuarios.mail]',
                'errors' => ['required'=>'Su mail es requerido',
                'valid_email'=>'Su email no es valido',
                'is_unique'=>'Su email ya ha sido registrado']
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[15]',
                'errors' => ['required'=>'Su contraseña es requerido',
                'min_length'=>'Su contraseña debe tener al menos 8 caracteres de longitud',
                'max_length'=>'Su contraseña supera el limite de caracteres de longitud']
            ],
            'password1' => [
                'rules' => 'required|min_length[8]|max_length[15]|matches[password]',
                'errors' => ['required'=>'Confirmar contraseña es requerido',
                'min_length'=>'Su contraseña debe tener al menos 8 caracteres de longitud',
                'max_length'=>'Su contraseña supera el limite de caracteres de longitud',
                'matches'=> 'Repetir contraseña no coincide con la contraseña']
            ]
        ];
        
        $validations = $this->validate($rules);
        if($validations){
            //reglas de validacion de registrar sesion
            $data =[
                'nombre' => $request->getPost('nombre'),
                'apellido' => $request->getPost('apellido'),
                'dni' => $request->getPost('dni'),
                'pais' => $request->getPost('pais'),
                'ciudad' => $request->getPost('ciudad'),
                'direccion' => $request->getPost('direccion'),
                'telefono' => $request->getPost('telefono'),
                'mail' => $request->getPost('mail'),
                'password' => password_hash($request->getPost('password'),PASSWORD_BCRYPT),
                'perfil_id' => 2,
                'estado' => 1
            ];
            // conecta con la base de datos por el model
            $userCliente = new cliente_Model();
            $userCliente->insert($data);

            /*$session = session();
            $session -> setFlashdata('mensaje', 'Registrado con exito');
            return redirect()->route('iniciarsesion');*/
        
            if(!$userCliente){
                return redirect()->back()->with('fallo', 'algo salió mal!!');
            }else{
                return redirect()->to('iniciarsesion')->with('correcto', 'Se ha registrado correctamente!!');
            }
        }else{
            $data['validation'] = $this->validator;
            $data ['titulo'] = 'Registro';
            echo view('plantillas/head',$data);
            echo view('plantillas/nav');
            echo view('contenidos/registro_view');
            echo view('plantillas/footer');
        }
    }
    /*****************************INICIAR CLIENTE**********************************************/
    public function login_usuario(){
        $request = \Config\Services::request();
        $session = session();
        //reglas de validacion del inicio de sesión
        $rules = [
            'mail' => [
                'rules' => 'required|valid_email|is_not_unique[usuarios.mail]',
                'errors'=>[
                'required'=>'Su email es requerido',
                'valid_email'=>'Ingrese un correo valido',
                'is_not_unique' => 'Este correo no esta registrado']
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[15]',
                'errors' => ['required'=>'Su contraseña es requerido',
                'min_length'=>'Su contraseña debe tener al menos 8 caracteres de longitud',
                'max_length'=>'Su contraseña no debe tener mas de 15 caracteres de longitud']
            ]
        ];

        $validations = $this->validate($rules);
        
        if($validations){
            $mail = $request->getPost('mail');
            $pass = $request->getPost('password');
            $user_Model = new cliente_Model();// conecta con la base de datos por el model
            $user = $user_Model->where('mail', $mail)->first(); 

            if($user){
                $pass_user = $user['password'];
                $pass_verif = password_verify($pass, $pass_user);
                if ($pass_verif){
                    $data = [
                        'id' => $user['id_usuario'],
                        'nombre' => $user['nombre'],
                        'apellido' => $user['apellido'],
                        'perfil' => $user['perfil_id'],
                        'login' => TRUE
                    ];
                    $session->set($data);

                    switch (session('perfil')){
                        case '1':
                            return redirect()->route('user_admin');
                            break;
                        case '2':
                            return redirect()->route('inicio');
                             break;
                    } //fin del switch

                }else{
                    //error al iniciar sesion
                    $session->setFlashdata('mensaje', 'Usuario y/o contraseña incorrecto');
                    return redirect()-> route('iniciarsesion'); 
                } //if de la verificacion
            }else{
                $session->setFlashdata('mensaje', 'Usuario y/O contraseña incorrecto');
                return redirect()-> route('iniciarsesion');
            } //if del user
        }else{
            //Error de validacion
            $data['validation'] = $this->validator;

            $data ['titulo'] = 'iniciarsesion';
            echo view('plantillas/head',$data);
            echo view('plantillas/nav');
            echo view('contenidos/iniciar_sesion_view');
            echo view('plantillas/footer');
        }
    }

    public function cerrar_sesion()
    {
      $session = session();
      $session -> destroy();
      return redirect()->route('iniciarsesion');
    }
}