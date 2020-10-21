@extends('template.template1')

@section('content')
    <div class="container span7 text-left col-md-5 col-md-offset-3">
        <h1 class="title-pg">
            <a href="{{route('procedimento.index')}}"><span class="glyphicon glyphicon-fast-backward" title="Voltar para página principal."></span></a>
            Procedimento: <b>{{$procedimento->nome}}</b>
        </h1>
        <div style="background-color:lightblue; width: 500px">
            <p><b>Código SUS: </b>{{$procedimento->cod_sus}}</p>
            <p><b>Nome: </b>{{$procedimento->nome}}</p>
            <p><b>Grupo: </b>{{$procedimento->grupo}}</p>
            <p><b>Valor: </b>"R$"{{$procedimento->valor}}</p>

            <hr>
            @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif

            {!! Form::open(['route' => ['procedimento.destroy', $procedimento->id], 'method' => 'DELETE']) !!}
                {!! Form::submit("Deletar Procedimento: $procedimento->nome", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection