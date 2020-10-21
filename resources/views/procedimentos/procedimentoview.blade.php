@extends('template.template1')
       
@section('content')
    <h1>Procedimentos</h1>
    <div class="container span7 text-center col-md-11 col-md-offset-1">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Código SUS</th>
                        <th scope="col" style="text-align:left;">Procedimento</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Valor</th>
                        <th scope="col" width="150px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($procedimentos as $procedimento)
                        <tr>
                            <th scope="row">{{$procedimento->id}}</th>
                            <td style="text-align:left;">{{$procedimento->cod_sus}}</td>
                            <td style="text-align:left;">{{$procedimento->nome}}</td>
                            <td style="text-align:center;">{{$procedimento->grupo}}</td>
                            <td style="text-align:left;">R$ {{$procedimento->valor}}</td>
                            
                            <td>
                                <a href="{{route('procedimento.edit', $procedimento->id)}}" class="actions edit">
                                   <span class="glyphicon glyphicon-pencil" title="Editar/Atualizar cadastro"></span>
                                </a>
                                <a href="{{route('procedimento.show', $procedimento->id)}}" class="actions delete">
                                   <span class="glyphicon glyphicon-eye-open" title="Ver Registro"></span>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $procedimentos->links() !!}
        </div>
    </div>
@endsection