<?php
/**
 * Author: lucas.vieira
 */

namespace App\Http\Request;


class FormCadClienteRequest extends Request {
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        "nome-completo" => 'required',
        "cpf" => 'required',
        "data_nascimento" => 'required',
        "sexo" => 'required',
        "email" => 'required|email|max:50',
        "senha" => 'required'
        ];
    }
}