<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Noticia;
class NoticiaController extends BaseController{

    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function crearNoticia(){
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('registro/registrarNoticias',$datos);
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
        return $this->response->redirect(site_url('registrarNoticia'));



        // $usuario = new Usuario();

        // if($contrasena = $this->mRequest->getVar('contrasena')){
        //     $datos = [
        //         'Nombre' => $this->mRequest->getVar('nombre'),
        //         'Contrasena' => $this->mRequest->getVar('contrasena')
        //     ];
        //     $usuario->insert($datos);
        //     return $this->response->redirect(site_url('listaUsuarios'));
        // }

    }

}