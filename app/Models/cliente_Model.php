<?php

namespace App\Models;

/*la clase model */
use CodeIgniter\Model;

class cliente_Model extends Model{
    
    protected $table      = 'usuarios'; //nombre de la tabla en la base de datos
    
    protected $primaryKey = 'id_usuario'; // clave primaria de la tabla

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    //definimos lo campos de mi tabla "usuarios"
    protected $allowedFields = ['nombre', 'apellido', 'dni', 'pais', 'ciudad', 'direccion', 'telefono', 'mail', 'password', 'perfil_id', 'estado'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';
}