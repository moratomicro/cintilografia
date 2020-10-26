@extends('template.header')

@extends('template.template')
  
@section('content')
    <h1 style="text-align:center;"><u>Municípios</u></h1>
    <div class="container span7 text-center col-md-5 col-md-offset-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:left; width:5%; background-color: #81BEF7;">Id</th>
                        <th scope="col" style="text-align:left; background-color: #81BEF7;">Nome</th>
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