<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NoticiasCategoria;

use CodeIgniter\Model;
use App\Models\Noticia;

class NoticiaController extends BaseController{

    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function crearNoticia(){
        $nc = new NoticiasCategoria();
        $resultado = $nc->select("*");
        $query = $resultado->get();
        $query = $query->getResult();
        $datos['tbl_noticias_categorias'] = $query;
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        return view('registro/registrarNoticias',$datos);
    }


    public function index(){
        $noticia = new Noticia();
        $selct = $noticia->select('tbl_noticias.id,tbl_noticias.FechaNoticia,tbl_noticias.Titular,tbl_noticias.slug,tbl_noticias_categorias.Nombre');
        $join = $noticia->join('tbl_noticias_categorias','tbl_noticias.categoria_id =tbl_noticias_categorias.id  ');
        $query = $join->get(); 
        $datos['tbl_noticias'] = $query->getResult();
        // $datos['tbl_noticias'] = $datos->result;
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        return view('ver/noticia/verNoticias',$datos);
    }


    public function guardarNoticia(){
        $noticia = new Noticia();
        $datos = [
            'FechaNoticia' => $this->mRequest->getVar('fecha'),
            'Titular' => $this->mRequest->getVar('titular'),
            'Texto' => $this->mRequest->getVar('texto'),
            'categoria_id' => $this->mRequest->getVar('categoria'),
            'slug' => $this->mRequest->getVar('slug')
        ];
        $noticia->insert($datos);
        return $this->response->redirect(site_url('verNoticias'));
    }


    public function editarNoticia($id = null){
        $noticia = new Noticia();
        
        $nc = new NoticiasCategoria();
        $resultado = $nc->select("*");
        $query = $resultado->get();
        $query = $query->getResult();
        $datos['tbl_noticias_categorias'] = $query;

        
        $datos['tbl_noticias'] = $noticia->where('id',$id)->first();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        return view('editar/editarNoticia',$datos);
    }


    public function actualizarNoticia(){
        $noticia = new Noticia();
        $id = intval($this->mRequest->getVar('id'));
        $datos = [
            'FechaNoticia' => $this->mRequest->getVar('fecha'),
            'Titular' => $this->mRequest->getVar('titular'),
            'Texto' => $this->mRequest->getVar('texto'),
            'categoria_id' => $this->mRequest->getVar('categoria'),
            'slug' => $this->mRequest->getVar('slug')
        ];
        var_dump($datos);
        $noticia->update($id,$datos);

        return $this->response->redirect(site_url('verNoticias'));
    }


    public function borrarNoticia($id = null){
        $noticia = new Noticia();
        $noticia->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('verNoticias'));

    }


    public function noticia(){
        $noticia = new Noticia();
        $selct = $noticia->select('*');
        $join = $noticia->join('tbl_noticias_categorias','tbl_noticias.categoria_id =tbl_noticias_categorias.id  ');
        $query = $join->get(); 
        $datos['tbl_noticias'] = $query->getResult();
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        return view('ver/noticia/noticiasobj',$datos);
    }


    public function detalleNoticia($slug,$id){
        $noticia = new Noticia();
        $noticia->select('*');
        $noticia->join('tbl_noticias_categorias','tbl_noticias.categoria_id =tbl_noticias_categorias.id ');
        $datos['tbl_noticias'] = $noticia->where('slug',$slug)->first();
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        return view('ver/noticia/detalleNoticia',$datos);
    }


    public function verCategoriaNoticia(){
        $nc = new NoticiasCategoria();
        $resultado = $nc->select("*");
        $query = $resultado->get();
        $query = $query->getResult();
        $datos['tbl_noticias_categorias'] = $query;
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        return view('ver/noticia/categoria',$datos);
    }


    public function listadoCategoria($categoria){
        $noticia = new Noticia();
        $noticia = new Noticia();
        $noticia->select('*');
        $noticia->join('tbl_noticias_categorias','tbl_noticias.categoria_id =tbl_noticias_categorias.id ');
        $datos['tbl_noticias'] = $noticia->where('tbl_noticias_categorias.Nombre',$categoria)->findAll();
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        return view('ver/noticia/noticias',$datos);
    }


}