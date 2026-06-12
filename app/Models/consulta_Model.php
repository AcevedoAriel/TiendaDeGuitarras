<?php

namespace App\Models;

/*Para utilizar la clase model */
use CodeIgniter\Model;

class consulta_Model extends Model{
    protected $table      = 'consulta';
    protected $primaryKey = 'id_consula';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'correo', 'motivo', 'texto_consulta'];

    protected $useTimestamps = false;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getConsultaAll(){
        $db = \Config\Database::connect();
        $builder = $db->table('consulta');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResultArray();
    }
}