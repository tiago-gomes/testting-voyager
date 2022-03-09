<?php

namespace App\Http\Controllers;

use App\Models\Associacao;
use App\Models\Associado;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class QuotaController extends VoyagerBaseController
{
    /**
     * @param Request $request
     * @param string  $year
     *
     * @return Application|Factory|View
     */
    public function index2(Request $request, string $year = null)
    {
        if (!$year) {
            $year = date('Y');
        }
        if(Auth()->user()->role->name=='admin') {
            $associados = Associado::with('quotas')->get();
            return view('vendor.voyager.quotas.browse', [
                'associados' => $associados,
                'year' => $year
            ]);
        }
        $associadoId = Auth()->user()->associado_id;
        $associados = Associado::query()
            ->where('id', $associadoId)
            ->with('quotas')
            ->get();
        return view('vendor.voyager.quotas.browse', [
            'associados' => $associados,
            'year' => $year
        ]);
    }
}
