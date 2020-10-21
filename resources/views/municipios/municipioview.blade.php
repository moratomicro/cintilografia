@extends('template.template1')
       
@section('content')
    <h1>Municípios</h1>
    <div class="container span7 text-center col-md-7 col-md-offset-2">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col" style="text-align:left;">Nome</th>                        
                        <th scope="col" width="150px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipios as $municipio)
                        <tr>
                            <th scope="row">{{$municipio->id}}</th>
                            <td style="text-align:left;">{{$municipio->nome}}</td>                       
                            <td>
                                <a href="{{route('municipio.edit', $municipio->id)}}" class="actions edit">
                                   <span class="glyphicon glyphicon-pencil" title="Editar/Atualizar cadastro"></span>
                                </a>
                                <a href="{{route('municipio.show', $municipio->id)}}" class="actions delete">
                                   <span class="glyphicon glyphicon-eye-open" title="Ver Registro"></span>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>    
            </table>

            {!! $municipios->links() !!}
        </div>
    </div>
@endsection