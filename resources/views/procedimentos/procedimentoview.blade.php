@extends('template.header')

@extends('template.template')

@section('content')
    <h1 style="text-align:center;"><u>{{ $title ?? 'Procedimentos Ofertados' }}</u></h1>
    
    <div class="container-fluid span7 text-center col-md-50 col-md-offset-0">
        <div class="table-responsive">
            <table class="table table-bordered" style="height: 100px;">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:left; width:125px; background-color: #81BEF7;">Código SUS</th>
                        <th scope="col" style="text-align:left; width:auto; background-color: #81BEF7;">Procedimento</th>
                        <th scope="col" style="text-align:left; width:auto; background-color: #81BEF7;">Grupo</th>
                        <th scope="col" style="text-align:left; width:100px; background-color: #81BEF7;">Valor</th>
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