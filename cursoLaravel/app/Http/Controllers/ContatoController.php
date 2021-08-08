<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
            (object)["nome"=>"Maria", "telefone"=>"6564773"],
            (object)["nome"=>"Pedro", "telefone"=>"6444444"],
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Esse é o criar do ContatoController";
    }

    public function editar(){
        return "Esse é o editar do ContatoController";
    }
}
