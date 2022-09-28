<?php 
namespace App\Models;

use CodeIgniter\Model;

class NoticiasCategoria extends Model{
    protected $table      = 'tbl_noticias_categorias';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre'];
}