<?php
/**
 * Author: lucas.vieira
 */

namespace App\Http\Request;



class FormCredEmpresaRequest extends Request {
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "nome-fantasia" => 'required',
            "razao-social" => 'required',
            "cnpj" => 'required|numeric',
            "email" => 'required|email|max:50',
            "telefone" => 'regex:/^\+?[^a-zA-Z]{5,}$/',
            "cep" => 'required|numeric',
            "tipo-servico" => 'required'
        ];
    }
}