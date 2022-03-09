<?php

namespace App\Http\Controllers;

use App\Models\Associado;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AssociadoController extends VoyagerBaseController
{
    public function registarAssociado()
    {
        return view('socio.registar');
    }

    public function criarAssociado(Request $request)
    {
        Associado::create(
            array_merge(
                $request->toArray(),
                [
                    'id_associacao' => 1
                ]
            )
        );
        return view('socio.criar');
    }
}
