<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HttpController extends Controller
{
    public function apiCall()
    {
        $client = new Client();
        $cep = $client->request('GET', 'https://viacep.com.br/ws/15046640/json/');
        $cep = $cep->getBody();
        $json = json_decode($cep);
        return view('welcome', compact('json', 'cep'));
    }
}
