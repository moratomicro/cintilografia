@extends('template.template1')
       
@section('content')
    <h1>Grupos</h1>
    <div class="container span7 text-center col-md-7 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col" style="text-align:left;">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col" width="150px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grupos as $grupo)
                        <tr>
                            <th scope="row">{{$grupo->id}}</th>
                            <td style="text-align:left;">{{$grupo->codigo}}</td>
                            <td style="text-align:left;">{{$grupo->nome}}</td>
                            
                            <td>
                                <a href="{{route('grupo.edit', $grupo->id)}}" class="actions edit">
                                   <span class="glyphicon glyphicon-pencil" title="Editar/Atualizar cadastro"></span>
                                </a>
                                <a href="{{route('grupo.show', $grupo->id)}}" class="actions delete">
                                   <span class="glyphicon glyphicon-eye-open" title="Ver Registro"></span>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $grupos->links() !!}
        </div>
    </div>
@endsection
