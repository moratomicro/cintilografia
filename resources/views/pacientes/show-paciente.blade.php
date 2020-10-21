@extends('template.header')

@extends('template.template')

@section('content')
    <div class="container span7 text-left col-md-5 col-md-offset-3">
        <h1 class="title-pg">
            <a href="{{route('paciente.index')}}"><span class="glyphicon glyphicon-fast-backward" title="Voltar para página principal."></span></a>
            Paciente: <b>{{$paciente->nome}}</b>
        </h1>
        <div style="background-color:lightblue; width: 500px">
            <p><b>ID: </b>{{$paciente->id}}</p>
            <p><b>Nome: </b>{{$paciente->nome}}</p>
            <p><b>Data de Nascimento: </b>{{date('d/m/Y', strtotime($paciente->datanasc))}}</p>
            <p><b>Município: </b>{{$paciente->municipio}}</p>

            <hr>
            @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif

            {!! Form::open(['route' => ['paciente.destroy', $paciente->id], 'method' => 'DELETE']) !!}
                {!! Form::submit("Deletar Paciente: $paciente->nome", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@extends('template.footer')