<?php

namespace App\Controllers;
use App\Models\producto_Model;
use App\Models\categoria_Model;

class carrito_Controller extends BaseController
{
    public function verCarrito(){
        $cart = \Config\Services::cart();
        $producto = new producto_Model();
        $data ['titulo'] = 'Carrito';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav');
        echo view('backEnd/carrito_view');
        echo view('plantillas/footer');
    }

    public function agregarCarrito(){
        $request = \Config\Services::request();
        // Call the cart service
        $cart = \Config\Services::cart();
        // Insert an array of values
        $data = array(
            'id'    => $request->getPost('id'),
            'name'    => $request->getPost('nombre'),
            'price'   => $request->getPost('precio'),
            'qty'     => 1,
        );
        $cart->insert($data);
        return redirect()->route('ver_carrito');
    }

    public function total_productos(){
        $cart = \Config\Services::cart();
        $cart->totalItems();
    }

    public function borrar($id){
        $cart = \Config\Services::cart();
        if($id == "all"){
            $cart->destroy();
            return redirect()->route('ver_carrito')->with('mensaje','¡¡¡El Carrito esta Vacio!!!');
        }else{
            $cart->remove($id);
        }
        return redirect()->route('ver_carrito');
    }
}