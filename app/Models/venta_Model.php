<?php

namespace App\Models;

/*la clase model */
use CodeIgniter\Model;

class venta_Model extends Model{
    
    protected $table      = 'venta'; //nombre de la tabla en la base de datos
    
    protected $primaryKey = 'venta_id'; // clave primaria de la tabla

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    //definimos lo campos de mi tabla "venta"
    protected $allowedFields = ['id_cliente','venta_fecha'];

    public function getVenta(){
        $db = \Config\Database::connect();
        $builder = $db->table('venta');
        $builder->select('*');
        $builder->join('usuarios', 'usuarios.id_usuario = venta.id_cliente');
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getDetalleId($id){
        $db = \Config\Database::connect();
        $builder = $db->table('detalle_ventas');
        $builder->select('*');
        $builder->where('id_venta',$id);
        $builder->join('venta', 'venta.venta_id = detalle_ventas.id_venta');
        $builder->join('producto', 'producto.id_producto = detalle_ventas.id_producto');
        $builder->join('usuarios', 'usuarios.id_usuario = venta.id_cliente');
        $query = $builder->get();
        return $query->getResultArray();
    }
}