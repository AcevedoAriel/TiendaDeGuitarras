<?php

namespace App\Controllers;

class Admin_Controller extends BaseController{

    public function admin(){
        $data ['titulo'] = 'Inicio Administrador';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/contenido_admin_view');
        echo view('plantillas/footer_admin');
    }
}