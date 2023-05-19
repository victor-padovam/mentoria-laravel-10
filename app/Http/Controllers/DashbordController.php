<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalDeClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalDeVendaCadastrado = $this->buscaTotalVendaCadastrado();
        $totalDeUsuarioCadastrado = $this->buscaTotalUsuarioCadastrado();


        return view('pages.dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClienteCadastrado', 'totalDeVendaCadastrado', 'totalDeUsuarioCadastrado'));
    }

    public function buscaTotalProdutoCadastrado()
    {
        $findProduto = Produto::all()->count();

        return $findProduto;
    }

    public function buscaTotalClienteCadastrado()
    {
        $find = Cliente::all()->count();

        return $find;
    }

    public function buscaTotalVendaCadastrado()
    {
        $find = Venda::all()->count();

        return $find;
    }

    public function buscaTotalUsuarioCadastrado()
    {
        $find = User::all()->count();

        return $find;
    }
}
