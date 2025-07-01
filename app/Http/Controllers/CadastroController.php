<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class CadastroController extends Controller
{
    public function store(RegisterRequest $request){

        if($request->method() == "POST"){
            $data = $request -> all();
            
            // Ajusta o valor de terms para true ou false, dependendo se o checkbox foi marcado.
            $data['terms'] = $request->has('terms');

            User::create($data);

            return redirect('/')-> with('success');
        }
    }


    public function show(){
        $find = User::get();
        return view("register", ["page" => "register"], compact ('find'));
    }


}
