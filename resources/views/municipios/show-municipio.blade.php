@extends('template.template1')

@section('content')
    <div class="container span7 text-left col-md-5 col-md-offset-3">
        <h1 class="title-pg">
            <a href="{{route('municipio.index')}}"><span class="glyphicon glyphicon-fast-backward" title="Voltar para página principal."></span></a>
            Município: <b>{{$municipio->nome}}</b>
        </h1>
        <div style="background-color:lightblue; width: 500px"}>
            <p><b>ID: </b>{{$municipio->id}}</p>
            <p><b>Cidade: </b>{{$municipio->nome}}</p>            

            <hr>
            @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif

            {!! Form::open(['route' => ['municipio.destroy', $municipio->id], 'method' => 'DELETE']) !!}
                {!! Form::submit("Deletar Município: $municipio->nome", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection