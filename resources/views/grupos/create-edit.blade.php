@extends('template.header')

@extends('template.template')

@section('content')
    <div class="container span7 text-center col-md-40 col-md-offset-0">
    <h3 class="title-pg">Gestão do(a) grupo: <br> <b>{{$grupo->nome ?? 'Novo'}}</b></h3>
    @if( isset($errors) && count($errors) > 0)
	<div class="alert alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    	</div>
    @endif

    <hr>
    @if( isset($grupo))
        {!! Form::model($grupo, ['route' => ['grupo.update', $grupo->id], 'class' => 'form', 'method' => 'put' ]) !!}    
    @else    
        {!! Form::open(['route' => 'grupo.store', 'class' => 'form']) !!}    
    @endif
        <div style="background-color:lightblue; width: 950px; text-align: left">
            <div class="form-group" style="width: 200px">    		
                {!! Form::label('codigo', 'Código:', ['class' => 'control-label']) !!}     		
                {!! Form::number('codigo', null, ['placeholder' => 'Código:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 600px">
                {!! Form::label('nome', 'Nome:', ['class' => 'control-label']) !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
@stop

@extends('template.footer')
