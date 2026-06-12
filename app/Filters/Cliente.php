<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Cliente implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session('perfil') != 2){
            if (session('perfil') == 1){
                return redirect()->route('inicio');
            }else{
                return redirect()->route('iniciarsesion');
            }
        }
        /*if (!session()->is_logged){
            return redirect()->route('iniciarsesion')->with('msg',[
                'type' => 'warning',
                'body' => 'Para acceder a este lugar debes logear su cuenta'
            ]);
        }*/
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
       //asd
    }
}