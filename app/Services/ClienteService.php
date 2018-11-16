<?php
/**
 * Author: lucas.vieira
 */

namespace App\Services;

use App\Repositories\ClienteRepository;

class ClienteService
{
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function saveCliente($dadosForm)
    {
    $dados['nome'] = $dadosForm['nome-completo'];
    $dados['cpf'] = $dadosForm['cpf'];
    $dados['data_nascimento'] = $dadosForm['data_nascimento'];
    $dados['sexo'] = $dadosForm['sexo'];
    $dados['email'] = $dadosForm['email'];
    $dados['senha'] = $dadosForm['senha'];

    return $this->clienteRepository->create($dados);
    }
}