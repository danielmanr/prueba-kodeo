<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'tbl_usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre','Contrasena'];


    public function consultaManual(){
        $sql = 
        $ejecucion = $db->table('tbl_usuarios');
        $ejecucion->upda
    }
}