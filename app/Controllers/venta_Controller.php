<?php

namespace App\Controllers;
use App\Models\producto_Model;
use App\Models\venta_Model;
use App\Models\vDetalle_Model;

class venta_Controller extends BaseController
{
    public function guardar_ventas(){
        $cart = \Config\Services::cart();
        $session = session();
        $venta = new venta_Model();
        $producto = new producto_Model();
        $detalle = new vDetalle_Model();
        $cart1 = $cart->contents();
        $band = true;
        foreach ($cart1 as $item){  
            $stock = $producto->where('id_producto', $item['id'])->first()['producto_stock'];
            if($stock < $item['qty']){
                $band= false;
            }
        }
        if($band){
        $datos = array(
            'id_cliente' => session('id'),
            'venta_fecha' => date ('Y-m-d'),
        );
        $venta_id = $venta->insert($datos);
        foreach ($cart1 as $item){
            $detalle_venta = array( 
                'id_venta' => $venta_id,
                'id_producto' => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio' => $item['price'],
            );
            $stockProducto = $producto->where('id_producto', $item['id'])->first();
        if($item['qty']<= $stockProducto['producto_stock']){
                $data = ['producto_stock'=>$stockProducto['producto_stock'] - $item['qty'],
                ];
                $producto -> update($item['id'], $data);
            }else{
                $session->setFlashdata('mensaje','Stock insuficiente, intente cantidad inferior!');
                return redirect()->route('ver_carrito');
            }
            $detalle->insert($detalle_venta);
        }
        $cart->destroy();
        $session->setFlashdata('mensaje','Gracias por su compra, lo esperamos pronto.!!');
        return redirect()->route('ver_carrito');
    }else{
        $session->setFlashdata('mensaje','Stock insuficiente, intente cantidad inferior!');
        return redirect()->route('ver_carrito');
    }
}
    public function listarFactura($id=null){
        $venta = new venta_Model();
        $data['venta'] = $venta->getVenta();
        $data['titulo'] = 'Detalle Venta';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/listado_factura_view');
        echo view('plantillas/footer_admin');
    }

    public function detalleFactura($id=null){
        $request = \Config\Services::request();
        $venta = new venta_Model();
        $data['detalle_ventas'] = $venta->getDetalleId($id);
        $data['titulo'] = 'Detalle Venta';
        echo view('plantillas/head',$data);
        echo view('plantillas/nav_admin');
        echo view('backEnd/detalle_factura_view');
        echo view('plantillas/footer_admin');
    }
}