@extends('voyager::master')

@section('page_title', 'Mapa de quotas')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-people"></i> Mapa de Quotas - {{$year}}
        </h1>
        @if(Auth()->user()->role->name=='admin' || Auth()->user()->role->name=='gestor'))
            <a href="quotas/create" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>Adicionar</span>
            </a>
        @endif
</div>
@stop

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Socio</th>
                                    <th>Janeiro</th>
                                    <th>Fevereiro</th>
                                    <th>Março</th>
                                    <th>Abril</th>
                                    <th>Maio</th>
                                    <th>Junho</th>
                                    <th>Julho</th>
                                    <th>Agosto</th>
                                    <th>Setembro</th>
                                    <th>Outobro</th>
                                    <th>Novembro</th>
                                    <th>Dezembro</th>
                                </tr>
                            </thead>
                            <style>
                                .green{
                                    background: green;
                                    margin: 0 2px;
                                }
                                .grey{
                                    background: grey;
                                    margin: 0 2px;
                                }
                            </style>
                            <tbody>
                                @foreach ($associados as $associado)
                                    <tr>
                                        <th>{{$associado->nome_completo}}</th>
                                            @php
                                            $meses = [
                                                "Janeiro" => false,
                                                "Fevereiro" => false,
                                                "Marco" => false,
                                                "Abril" => false,
                                                "Maio" => false,
                                                "Junho" => false,
                                                "Julho" => false,
                                                "Agosto" => false,
                                                "Setembro" => false,
                                                "Outubro" => false,
                                                "Novembro" => false,
                                                "Decembro" => false
                                            ];
                                            foreach ($associado->quotas as $quota) {
                                                if($quota->mes =='Janeiro') {
                                                    $meses['Janeiro'] = true;
                                                }
                                                if($quota->mes =='Fevereiro') {
                                                    $meses['Fevereiro'] = true;
                                                }
                                                if($quota->mes =='Marco') {
                                                    $meses['Marco'] = true;
                                                }
                                                if($quota->mes =='Abril') {
                                                    $meses['Abril'] = true;
                                                }
                                                if($quota->mes =='Maio') {
                                                    $meses['Maio'] = true;
                                                }
                                                if($quota->mes =='Junho') {
                                                    $meses['Junho'] = true;
                                                }
                                                if($quota->mes =='Julho') {
                                                    $meses['Julho'] = true;
                                                }
                                                if($quota->mes =='Agosto') {
                                                    $meses['Agosto'] = true;
                                                }
                                                if($quota->mes =='Setembro') {
                                                    $meses['Setembro'] = true;
                                                }
                                                if($quota->mes =='Outobro') {
                                                    $meses['Outobro'] = true;
                                                }
                                                if($quota->mes =='Novembro') {
                                                    $meses['Novembro'] = true;
                                                }
                                                if($quota->mes =='Dezembro') {
                                                    $meses['Dezembro'] = true;
                                                }
                                            }
                                        @endphp
                                        @foreach ($meses as $mes)
                                            @if ($mes)
                                                <th class="green"></th>
                                            @else
                                                <th class="grey"></th>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
