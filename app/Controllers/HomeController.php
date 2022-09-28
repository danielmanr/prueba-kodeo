<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller{

    public function inicio(){
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');

        return view('home',$datos);
    }


    public function registrar(){
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');

        return view('registro/registrarSin',$datos);
    }

    public function inicioSesion(){
        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer');
        return view('login',$datos);

    }

}