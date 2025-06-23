<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    public function adicionar(Request $request){

        if($request->method() == "POST"){
            $data = $request -> all();
            $data['terms'] = $request->has('terms');

            User::create($data);

            return view("index");
        }
    }


    public function visualizar(){
        $find = User::get();
        return view('index', compact ('find'));
    }


}
