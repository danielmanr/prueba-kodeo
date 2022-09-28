<?php

namespace App\Controllers;

use App\Models\Usuario;


class LoginController extends BaseController
{

    public function __construct()
    {
        $this->mRequest = service("request");
    }


    public function login()
    {
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');

        return view('login', $datos);
    }


    public function loguear()
    {
        $usuario = new Usuario();
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        $nombre = $this->mRequest->getVar('nombre');
        $contrasena = $this->mRequest->getVar('contrasena');

        if ($query = $usuario->where('Nombre', $nombre)->first()) {
            if ($contrasena == $query['Contrasena']) {
                $datos = [
                    'nombre' => $nombre,
                    'login' => TRUE
                ];
                $this->session->set($datos);

                if (isset($_SESSION['nombre'])) {
                    return $this->response->redirect(site_url('listaUsuarios'));
                } else {
                    return $this->response->redirect(site_url('inicioSesion'));
                }
            } else {
                return $this->response->redirect(site_url('home'));
            }
        } else {
            return $this->response->redirect(site_url('home'));
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return $this->response->redirect(site_url('home'));
    }
}