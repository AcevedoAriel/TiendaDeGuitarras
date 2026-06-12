<?php

namespace App\Controllers;

/*Llamo al modelo que cree*/
use App\Models\consulta_Model;

class Consulta_Controller extends BaseController
{

/*****************************REGISTRAR CONSULTA**********************************************/
public function contacto(){
    $data ['titulo'] = 'Contacto';
    echo view('plantillas/head',$data);
    echo view('plantillas/nav');
    echo view('contenidos/contacto_view');
    echo view('plantillas/footer');
}

    public function registrarConsulta(){
        /*echo 'Datos enviado!'; die;*/
        $request = \Config\Services::request();
                    $rules = [ 
                        'nombre' => [
                            'rules' => 'required',
                            'errors'=>[
                                'required'=>'Su nombre es requerido'
                            ]
                        ],
                        'correo' => [
                            'rules' => 'required|valid_email',
                            'errors' => [
                                'required'=>'Su correo es requerida',
                                'valid_email'=>'email no valido'
                            ]
                        ],
                        'motivo' => [
                            'rules' => 'required',
                            'errors' =>[
                                'required'=>'motivo es requerida'
                            ]
                        ],
                        'texto_consulta' => [
                            'rules' => 'required',
                            'errors' =>[
                                'required'=>'Comentario de consulta es requerida'
                            ]
                        ]
                    ];

                    $validations = $this->validate($rules);
                        if($validations){
                            $data =[
                                /*Insertar datos*/
                                'nombre' => $request->getPost('nombre'),
                                'correo' => $request->getPost('correo'),
                                'motivo' => $request->getPost('motivo'),
                                'texto_consulta' => $request->getPost('texto_consulta')
                            ];

                            /*Defino mi modelo consulta*/
                            $userConsulta = new consulta_Model();
                            $userConsulta->insert($data);

                            //msj
                            return redirect()->back()->with('correcto', 'Su consulta se ha enviado con exito!!, en breve le responderemos');
                            
                        }else{
                            $data['validation'] = $this->validator;
                            $data ['titulo'] = 'Contacto';
                            echo view('plantillas/head',$data);
                            echo view('plantillas/nav');
                            echo view('contenidos/contacto_view');
                            echo view('plantillas/footer');
                        }
    }

    public function ver_consulta(){
        $consultas = new consulta_Model();
        $data['consulta'] = $consultas->getConsultaAll();
        $data ['titulo'] = 'Ver Consulta';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/ver_consultas_view');
        echo view('plantillas/footer_admin');
    }

}