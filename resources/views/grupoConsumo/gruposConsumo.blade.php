@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Grupos de Consumo</div>

                <div class="panel-body">
                    @if(count($gruposConsumo) == 0)
                    <div class="alert alert-danger">
                            Não existem grupos de consumo cadastrados.
                    </div>
                    @else
                        <table class="table table-hover">
                            
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Período</th>
                                <th>Primeiro Evento</th>
                                <th>Dia limite para pedidos</th>
                                <th colspan="2">Ação</th>
                            </tr>
                            
                            @forelse ($gruposConsumo as $grupoConsumo)
                            <tr>
                                <td>{{ $grupoConsumo->id }}</td>
                                <td>{{ $grupoConsumo->name }}</td>
                                <td>{{ $grupoConsumo->descricao }}</td>
                                <td>{{ $grupoConsumo->periodo }}</td>
                                <td>{{ $grupoConsumo->dia_semana }}</td>
                                <td>{{ $grupoConsumo->prazo_pedidos }}</td>
                                <td><a class="btn btn-success" href="/gerenciar/{{$grupoConsumo->id}}">Gerenciar</a></td> 
                            </tr>   
                            @endforeach
                        </table>    
                    @endif
                </div>
                <div class="panel-footer">
                    <a class="btn btn-success" href="/adicionarGrupoConsumo">Novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection