@extends('template.header')

@extends('template.template')

@section('content')
    <h1><u>{{ $title ?? 'Procedimentos Ofertados' }}</u></h1>
    
    <div class="container span7 text-center col-md-11 col-md-offset-1">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Código SUS</th>
                        <th scope="col" style="text-align:left;">Procedimento</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($procedimentos as $procedimento)
                        <tr>
                            <td style="text-align:left;">{{$procedimento->cod_sus}}</td>
                            <td style="text-align:left;">{{$procedimento->nome}}</td>
                            <td style="text-align:center;">{{$procedimento->grupo}}</td>
                            <td style="text-align:left;">R$ {{$procedimento->valor}}</td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>
            {!! $procedimentos->links() !!}
        </div>
    </div> 
@stop

@extends('template.footer')