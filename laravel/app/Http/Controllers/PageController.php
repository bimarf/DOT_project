<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\client;

class PageController extends Controller
{
    public function index(){
        return "Halaman Controller";
    }
    
    public function getprovince(){
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/province',
                array(
                    'headers' => array(
                        'key' => '0df6d5bf733214af6c6644eb8717c92c',
                    )
                )
            );
        } catch(RequestException $e){
            var_dump($e->getResponse()->getBody()->getContents());
        }

        $json = $response->getBody()->getContents();
        
        $array_result = json_decode($json, true);

        print_r($array_result);
    }

    public function getcity(){
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/city',
                array(
                    'headers' => array(
                        'key' => '0df6d5bf733214af6c6644eb8717c92c',
                    )
                )
            );
        } catch(RequestException $e){
            var_dump($e->getResponse()->getBody()->getContents());
        }

        $json = $response->getBody()->getContents();
        
        $array_result = json_decode($json, true);

        print_r($array_result);
    }

}
