@extends('template.template1')
       
@section('content')
<div class="container span7 text-center col-md-40 col-md-offset-0">
<h3 class="title-pg">Gestão do(a) município: <br> <b>{{$municipio->nome ?? 'Novo'}}</b></h3>
    @if( isset($errors) && count($errors) > 0)
	<div class="alert alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    	</div>
    @endif

    <hr>
    @if( isset($municipio))
        {!! Form::model($municipio, ['route' => ['municipio.update', $municipio->id], 'class' => 'form', 'method' => 'put' ]) !!}    
    @else    
        {!! Form::open(['route' => 'municipio.store', 'class' => 'form']) !!}    
    @endif
        <div style="background-color:lightblue; width: 950px; text-align: left">
            <div class="form-group" style="width: 600px">    		
                {!! Form::label('nome', 'Nome:', ['class' => 'control-label']) !!}     		
                {!! Form::text('nome', null, ['placeholder' => 'Nome:', 'class' => 'form-control']) !!}
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
@endsection