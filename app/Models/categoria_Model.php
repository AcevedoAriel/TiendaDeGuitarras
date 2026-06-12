<?php

namespace App\Models;

/*la clase model */
use CodeIgniter\Model;

class categoria_Model extends Model{
    
    protected $table      = 'producto_categoria'; //nombre de la tabla en la base de datos
    
    protected $primaryKey = 'categoria_id'; // clave primaria de la tabla

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    //definimos lo campos de mi tabla "usuarios"
    protected $allowedFields = ['categoria_descripcion'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function productoCategoria()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('producto');
		$builder->select('*');
		$builder->join('producto_categoria', 'producto_categoria.categoria_id = producto.producto_categoria');
		$query = $builder->get();
		return $query->getResultArray();
	}
}