<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NoticiasCategoria;
class NoticiasCategoriaController extends BaseController{

    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function index(){

        $categoria = new NoticiasCategoria();
        $datos['tbl_noticias_categorias'] = $categoria->orderBy('id','ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        

        return view('ver/verCategoria',$datos);

    }


    public function crearCategoria(){

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('registro/registrarCategoria',$datos);
    }


    public function guardarCategoria(){
        $categoria = new NoticiasCategoria();

        $datos = [
            'Nombre' => $this->mRequest->getVar('nombre')
        ];
        $categoria->insert($datos);
        return $this->response->redirect(site_url('listaCategorias'));
    }
    


    public function borrarCategoria($id = null){
        $categoria = new NoticiasCategoria();
        $categoria->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('listaCategorias'));
    }


    public function editarCategoria($id = null){
        $categoria = new NoticiasCategoria();

        $datos['tbl_noticias_categorias'] = $categoria->where('id',$id)->first();
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        
        return view('editar/editarCategoria',$datos);
    }

    public function actualizarCategoria(){
        $categoria = new NoticiasCategoria();
        $id = intval($this->mRequest->getVar('id'));
        $datos = [
            'Nombre' => $this->mRequest->getVar('nombre')
        ];
        $categoria->update($id,$datos);        
        
        return $this->response->redirect(site_url('listaCategorias'));
    }


}