@extends('template.header')

@extends('template.template')
   
@section('content')
    <h1>Grupos</h1>
    <div class="container span7 text-center col-md-7 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:left;">Código</th>
                        <th scope="col">Nome</th>
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
