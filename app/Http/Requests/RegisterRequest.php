<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rules\Password;


class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        // Inicializa a regra

        $request=[];

        // Verifica o método
        if($this->method() == 'POST' || $this->method() == 'PUT'){
            $request=[
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email'],
                'password' => ['required', Password::min(8)]
            ];
        }

        return $request;
            
        
    }
}
