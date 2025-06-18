<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    public function adicionar(Request $request){

        if($request->method() == "POST"){
            $data = $request -> all();

            Cadastro::create($data);

            return view("index");
        }
    }


    public function visualizar(){
        $find = Cadastro::get();
        return view('index', compact ('find'));
    }


}
