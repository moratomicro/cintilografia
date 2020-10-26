@extends('template.header')

@extends('template.template')
   
@section('content')
    <h1 style="text-align:center;"><u>Grupos</u></h1>
    <div class="container span7 text-center col-md-6 col-md-offset-3">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"  style="text-align:left; width:5%; background-color: #81BEF7;">Código</th>
                        <th scope="col" style="text-align:left; background-color: #81BEF7;">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grupos as $grupo)
                        <tr>
                            <td style="text-align:left;">{{$grupo->codigo}}</td>
                            <td style="text-align:left;">{{$grupo->nome}}</td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $grupos->links() !!}
        </div>
    </div>
@stop

@extends('template.footer')
