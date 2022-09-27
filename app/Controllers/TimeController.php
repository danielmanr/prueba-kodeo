<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Response;

class TimeController extends Controller{

    public function obtenerTiempo(){
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://swapi.dev/', [
            // 'lat' => '42.816667', 
            // 'lon' => '-1.65',
            // 'appid' => 'e65c86d662c67e10c7374c90b3b1bca8'
        ]);
        // var_dump($response);
        // die();
        // $response->getBody();

    }
// 

}