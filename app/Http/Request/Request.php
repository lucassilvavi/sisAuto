<?php

namespace App\Http\Request;

/**
 * Description of PartidoRequest
 *
 * @author Gleuton Dutra <gleuton.dutra@gmail.com>
 */
use Illuminate\Foundation\Http\FormRequest,
    Illuminate\Contracts\Validation\Validator;

abstract class Request extends FormRequest
{

    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

    public function response(array $errors)
    {
        $error = $this->trResponse($errors);
        return response($error);
    }

    public function messages()
    {
        return [
            'required' => '{":attribute":"Este campo é obrigatório."}',
            'digits' => '{":attribute":"Este campo deve ter :digits dígitos."}',
            'alpha' => '{":attribute":"Este campo deve conter somente letras."}',
            'numeric' => '{":attribute":"Este campo deve conter apenas números."}',
            'regex' => '{":attribute":"Formato do campo é inválido."}',
            'confirm_pass' => '{":attribute":"Senha invalida."}',
            'unique' => '{":attribute":"Essas informações não podem ser cadastradas, pois já existem no sistema."}',
            'cpf' => '{":attribute":"Este CPF é invalido."}',
            'email' => '{":attribute":"O endereço de e-mail está incorreto. Inclua um “@” no endereço de e-mail."}',
            'digits_between' => '{":attribute":"Este campo deve ter entre :min e :max dígitos."}',
            'max' => '{":attribute":"O Campo não deve ser maior que :max."}',
            'numero_processo' => '{":attribute":"Número fora do padrão"}',
            'min' => '{":attribute":"O Campo não deve ser menor que :min."}',
            'float' => '{":attribute":"Este campo deve ser um valor decimal."}',
            'integer' => '{":attribute":"Este campo deve ser um número inteiro."}',
            'required_without' => '{":attribute":"Pelo menos um campo de valor deve estar preenchido."}',
            'valida_min_ente' => '{":attribute":"O valor não coincide com o minimo para um município deste porte."}',
            'mimes' => '{":attribute":"São permitidas apenas Extensões doc, docx, pdf, xls, xlsx"}',
            'mimetypes' => '{":attribute":"São permitidas apenas Extensões doc, docx, pdf, xls, xlsx"}',
            'date' => '{":attribute":" formato invalido"}',
            'valor_item_ano' => '{":attribute":" Item já possui valor cadastrado para este ano"}',
            'nu_nota' => '{":attribute":" Já cadastrado para este ano"}',
        ];
    }

    protected function trResponse(array $errors)
    {
        foreach ($errors as $i => $e) {
            $decodeJson = json_decode($e, true);
            $string = explode('.', key($decodeJson));

            foreach ($string as $indice => $str) {
                if ($indice > 0) {
                    $string[$indice] = $str . ']';
                }
            }

            $key = implode('[', $string);
            foreach (array_values($decodeJson) as $es) {
                $errors[$i] = '{"' . $key . '":"' . $es . '"}';
            }
        }

        return json_encode($errors);
    }

}
