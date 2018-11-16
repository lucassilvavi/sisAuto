<?php
/**
 * Author: lucas.vieira
 */

namespace App\Http\Controllers;


use App\Http\Request\FormCadClienteRequest;
use App\Http\Request\FormCredEmpresaRequest;
use App\Services\LojistaService;
use App\Services\ClienteService;

class CadastrarController
{
    protected $lojistaService;
    protected $clienteService;
    public function __construct(LojistaService $lojistaService,
ClienteService $clienteService)
    {
        $this->lojistaService = $lojistaService;
        $this->clienteService = $clienteService;
    }


    public function cadastroCliente()
    {
     return view('cadastro.cadastro-cliente');
    }

    public function saveCliente(FormCadClienteRequest $request)
    {
     $this->clienteService->saveCliente($request->all());
    }

    public function cadastroEmpresa()
    {
     return view('cadastro.cadastro-empresa');
    }

    public function saveEmpresa(FormCredEmpresaRequest $request)
    {
    $this->lojistaService->saveEmpresa($request->all());
    }
}