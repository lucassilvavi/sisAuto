<?php
/**
 * Author: lucas.vieira
 */

namespace App\Services;

use App\Repositories\LojistaRepository;

class LojistaService
{
    private $lojistaRepository;

    public function __construct(LojistaRepository $lojistaRepository)
    {
        $this->lojistaRepository = $lojistaRepository;
    }

    public function saveEmpresa($dadosForm)
    {
        $dados['nome'] = $dadosForm['nome-fantasia'];
        $dados['razao_social'] = $dadosForm['razao-social'];
        $dados['cnpj'] = $dadosForm['cnpj'];
        $dados['email'] = $dadosForm['email'];
        $dados['telefone'] = $dadosForm['telefone'];
        $dados['cep'] = $dadosForm['cep'];
        return $this->lojistaRepository->create($dados);
    }
}