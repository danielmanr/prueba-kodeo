<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class UsuarioController extends Controller{


    public function __construct()
    {
        $this->mRequest = service("request");
    }

    public function index(){

        $usuario = new Usuario();
        $datos['tbl_usuarios'] = $usuario->orderBy('id','ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('ver/verUsuarios',$datos);

    }


    public function crear(){

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('registro/registrarUsuario',$datos);
    }


    public function guardar(){
        $usuario = new Usuario();

        if($contrasena = $this->mRequest->getVar('contrasena')){
            $datos = [
                'Nombre' => $this->mRequest->getVar('nombre'),
                'Contrasena' => $this->mRequest->getVar('contrasena')
            ];
            $usuario->insert($datos);
            return $this->response->redirect(site_url('listaUsuarios'));
        }
    }
    
    
    public function borrar($id = null){
        $usuario = new Usuario();
        $usuario->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('listaUsuarios'));
    }


    public function editar($id = null){
        $usuario = new Usuario();

        $datos['tbl_usuarios'] = $usuario->where('id',$id)->first();
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        
        return view('editar/editarUsuario',$datos);
    }


    public function actualizar(){
        $usuario = new Usuario();
        $id = intval($this->mRequest->getVar('id'));
        $datos = [
            'Nombre' => $this->mRequest->getVar('nombre'),
            'Contrasena' => $this->mRequest->getVar('contrasena')
        ];
        $usuario->update($id,$datos);
        
        return $this->response->redirect(site_url('listaUsuarios'));



    }

}