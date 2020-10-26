@extends('template.header')

@extends('template.template')
      
@section('content')
    <h1 style="text-align:center;"><u>Pacientes</u></h1>
    <div class="container span7 text-center col-md-9 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:left; width:200px; background-color: #81BEF7;">Nome</th>
                        <th scope="col" style="text-align:left; width:125px; background-color: #81BEF7;">Data Nascimento</th>
                        <th scope="col" style="text-align:left; width:125px; background-color: #81BEF7;">Município</th>
                        <th scope="col" style="text-align:center; width:80px; background-color: #81BEF7;">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td style="text-align:left;">{{$paciente->nome}}</td>
                            <td>{{date('d/m/Y', strtotime($paciente->datanasc))}}</td>
                            <td style="text-align:left;">{{$paciente->municipio}}</td>
                            
                            <td style="text-align:center;">
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
@stop

@extends('template.footer')