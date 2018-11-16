<?php
/**
 * Author: lucas.vieira
 */

namespace App\Repositories;

use App\Model\Cliente;


class ClienteRepository extends Repository
{
    protected $model;

    public function __construct(Cliente $cliente)
    {
        $this->model = $cliente;
    }
}