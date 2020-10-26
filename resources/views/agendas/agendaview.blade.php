@extends('template.header')

@extends('template.template')

@section('content')
    <div>
        <h1 style="text-align:center;"><u>{{ $title ?? 'Agenda Mensal' }}</u></h1>
        <br />
        <div class="container-fluid span7 text-center col-md-50 col-md-offset-0">
            <div class="table-responsive">
                <table class="table table-bordered" style="height: 100px;">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Paciente</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Dt. Nasc.</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Município</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Procedimento</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Valor</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Dt. Exame</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Horário</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Mês</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Ano</th>
                            <th scope="col" style="text-align:left; background-color: #81BEF7;">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agendas as $agenda)
                            <tr>
                                <td style="text-align:left;">   {{$agenda->pacienteNome}}</td>
                                <td style="text-align:left;">   {{date('d/m/Y', strtotime($agenda->dtNasc))}}</td>
                                <td style="text-align:center;"> {{$agenda->municipio}}</td>
                                <td style="text-align:center;"> {{$agenda->procedimento}}</td>
                                <td style="text-align:left;">R$ {{$agenda->valorUnitario}}</td>
                                <td style="text-align:center;"> {{date('d/m/Y', strtotime($agenda->dtExame))}}</td>
                                <td style="text-align:center;"> {{$agenda->horario}}</td>
                                <td style="text-align:center;"> {{$agenda->mes}}</td>
                                <td style="text-align:center;"> {{$agenda->ano}}</td>
                                <td>
                                    <a href="{{route('agenda.edit', $agenda->id)}}" class="actions edit">
                                    <span class="glyphicon glyphicon-pencil" title="Editar/Atualizar cadastro"></span>
                                    </a>
                                    <a href="{{route('agenda.show', $agenda->id)}}" class="actions delete">
                                    <span class="glyphicon glyphicon-eye-open" title="Ver Registro"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>    
                </table>

                {!! $agendas->links() !!}
            </div>
        </div> 
    </div>
@stop

@extends('template.footer')