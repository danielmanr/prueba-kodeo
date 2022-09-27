<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller{

    public function inicio(){
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('home',$datos);
    }

}