<?php
/**
 * Author: lucas.vieira
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Lojista extends Model
{
    protected $connection = "mysql";
    protected $fillable
        = [
            'nome',
            'razao_social',
            'cnpj',
            'email',
            'telefone',
            'cep'
        ];
    public $timestamps = false;
    protected $table = "lojista";
    protected $primaryKey = "id";
}