@extends('template.header')

@extends('template.template')
  
@section('content')
    <h1>Municípios</h1>
    <div class="container span7 text-center col-md-7 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col" style="text-align:left;">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipios as $municipio)
                        <tr>
                            <th scope="row">{{$municipio->id}}</th>
                            <td style="text-align:left;">{{$municipio->nome}}</td>                      
                                                       
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $municipios->links() !!}
        </div>
    </div>
@stop

@extends('template.footer')