<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    //

    public function store(Request $request)
    {
        $venda = Venda::create($request->all());
        $venda->itensVenda()->createMany($request->itensVenda);
        return redirect()->route('vendas.index');
    }
}
