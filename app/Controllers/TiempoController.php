<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Response;





class TiempoController extends Controller{

    



    public function obtenerTiempo(){

        $datos['header'] = view('templatesFuera/header');
        $datos['footer'] = view('templatesFuera/footer'); 
        $tiempo = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=42.816667&lon=-1.65&limit=5&appid=e65c86d662c67e10c7374c90b3b1bca8'));
        $temperaturaKelvin = $tiempo->main->temp;
        $datos['tiempo'] = round($temperaturaKelvin - 273.15);
        return view('ver/eltiempo',$datos);
    }
}

