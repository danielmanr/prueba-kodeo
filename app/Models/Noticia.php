<?php 
namespace App\Models;

use CodeIgniter\Model;

class Noticia extends Model{
    protected $table      = 'tbl_noticias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['FechaNoticia','titular','Texto','Categoria_id','slug'];
}