<?php

namespace App\Models;

/*la clase model */
use CodeIgniter\Model;

class producto_Model extends Model{

    protected $table      = 'producto'; //nombre de la tabla en la base de datos

    protected $primaryKey = 'id_producto'; // clave primaria de la tabla

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    //definimos lo campos de mi tabla "producto"
    protected $allowedFields = ['producto_nombre', 'producto_descripcion', 'producto_precio', 'producto_imagen', 'producto_stock', 'producto_categoria', 'producto_estado'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getProductoAll(){
        $db = \Config\Database::connect();
        $builder = $db->table('producto');
        $builder->select('*');
                     //mi tabla producto_categoria , claveprimaria = clave foranea
        $builder->join('producto_categoria', 'producto_categoria.categoria_id = producto.producto_categoria');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getProductoId($id)
	{
		$db = \Config\Database::connect();
		$builder = $db->table('producto');
		$builder->select('*');
		$builder->where('id_producto',$id);
		$query = $builder->get();
		return $query->getResultArray();
	}
}