<?php

namespace App\Models;

/*la clase model*/
use CodeIgniter\Model;

class vDetalle_Model extends Model{
    
    protected $table      = 'detalle_ventas'; //nombre de la tabla en la base de datos

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    //definimos lo campos de mi tabla "venta detalle"
    protected $allowedFields = ['id_venta','id_producto','detalle_cantidad','detalle_precio'];
}