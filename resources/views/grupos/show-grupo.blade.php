@extends('template.header')

@extends('template.template')

@section('content')
    <div class="container span7 text-left col-md-5 col-md-offset-3">
        <h1 class="title-pg">
            <a href="{{route('grupo.index')}}"><span class="glyphicon glyphicon-fast-backward" title="Voltar para página principal."></span></a>
            Grupo: <b>{{$grupo->nome}}</b>
        </h1>
        <div style="background-color:lightblue; width: 500px">
            <p><b>ID: </b>{{$grupo->id}}</p>
            <p><b>Código SUS: </b>{{$grupo->codigo}}</p>
            <p><b>Nome: </b>{{$grupo->nome}}</p>
            <hr>
            @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif

            {!! Form::open(['route' => ['grupo.destroy', $grupo->id], 'method' => 'DELETE']) !!}
                {!! Form::submit("Deletar Grupo : $grupo->codigo", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@extends('template.footer')

