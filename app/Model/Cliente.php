<?php
/**
 * Author: lucas.vieira
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $connection = "mysql";
    protected $fillable = [
            "nome",
            'cpf',
            'data_nascimento',
            'sexo',
            'email',
            'senha'
        ];
    public $timestamps = false;
    protected $table = "cliente";
    protected $primaryKey = "id";
}