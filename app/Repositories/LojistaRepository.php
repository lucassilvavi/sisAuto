<?php
/**
 * Author: lucas.vieira
 */

namespace App\Repositories;

use App\Model\Lojista;

class LojistaRepository extends Repository
{
    protected $model;

    public function __construct(Lojista $lojista)
    {
     $this->model = $lojista;
    }

}