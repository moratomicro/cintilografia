@extends('template.template1')
       
@section('content')
    <h1>Pacientes</h1>
    <div class="container span7 text-center col-md-7 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col" style="text-align:left;">Nome</th>
                        <th scope="col">Data Nascimento</th>
                        <th scope="col">Município</th>
                        <th scope="col" width="150px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <th scope="row">{{$paciente->id}}</th>
                            <td style="text-align:left;">{{$paciente->nome}}</td>
                            <td>{{$paciente->datanasc}}</td>
                            <td style="text-align:left;">{{$paciente->municipio}}</td>
                            
                            <td>
                                <a href="{{route('paciente.edit', $paciente->id)}}" class="actions edit">
                                   <span class="glyphicon glyphicon-pencil" title="Editar/Atualizar cadastro"></span>
                                </a>
                                <a href="{{route('paciente.show', $paciente->id)}}" class="actions delete">
                                   <span class="glyphicon glyphicon-eye-open" title="Ver Registro"></span>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $pacientes->links() !!}
        </div>
    </div>
@endsection