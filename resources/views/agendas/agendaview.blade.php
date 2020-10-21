@extends('template.header')

@extends('template.template')

@section('content')
    <div>
        <h1><u>{{ $title ?? 'Agenda Mensal' }}</u></h1>
        <br />
        <div class="container span7 text-center col-md-11 col-md-offset-1">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:left;">Paciente</th>
                        <th scope="col" style="text-align:left;">Dt. Nasc.</th>
                        <th scope="col" style="text-align:left;">Município</th>
                        <th scope="col" style="text-align:left;">Procedimento</th>
                        <th scope="col" style="text-align:left;">Valor</th>
                        <th scope="col" style="text-align:left;">Exame</th>
                        <th scope="col" style="text-align:left;">Horário</th>
                        <th scope="col" style="text-align:left;">Mês</th>
                        <th scope="col" style="text-align:left;">Ano</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendas as $agenda)
                        <tr>
                            <td style="text-align:left;">{{$agenda->pacienteNome}}</td>
                            <td style="text-align:left;">{{date('d/m/Y', strtotime($agenda->dtNasc))}}</td>
                            <td style="text-align:center;">{{$agenda->municipio}}</td>
                            <td style="text-align:center;">{{$agenda->procedimento}}</td>
                            <td style="text-align:left;">R$ {{$agenda->valorUnitario}}</td>
                            <td style="text-align:center;">{{date('d/m/Y', strtotime($agenda->dtExame))}}</td>
                            <td style="text-align:center;">{{$agenda->horario}}</td>
                            <td style="text-align:center;">{{$agenda->mes}}</td>
                            <td style="text-align:center;">{{$agenda->ano}}</td>
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