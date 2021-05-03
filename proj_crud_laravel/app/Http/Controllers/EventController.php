<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function  index(){
        $arr = [10, 20, 30, 40, 50];
    $nomes =['Elson', 'Thiago', 'Anna', 'Xilene'];

    $nome = "Matheus";
    $idade = 25;
    $formacao = "Administração";
    $mes = "Fevereiro";

    return view('welcome', 
    [
        'nome'=> $nome, 
        'idade'=> $idade,
        'formacao'=> $formacao, 
        'mes'=> $mes,
        'arr' => $arr,
        'nomes' => $nomes
        ]);

    }
    public function create(){
        return view('events.create');
    }
}
