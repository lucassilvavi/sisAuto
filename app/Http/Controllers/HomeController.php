<?php
/**
 * Author: lucas.vieira
 */

namespace App\Http\Controllers;

use App\Repositories\LojistaRepository;

class HomeController extends Controller
{
    protected $lojistaRepository;

    public function __construct(LojistaRepository $lojistaRepository)
    {
        $this->lojistaRepository = $lojistaRepository;
    }

    public function home()
    {

        $oi = $this->lojistaRepository->all();
        dd($oi);

        return view('welcome')->with('oi', $oi);
    }

    public function comoFunciona()
    {
        return view('informacoes.como-funciona');
    }

    public function contato()
    {
        return view('informacoes.contato');
    }
}