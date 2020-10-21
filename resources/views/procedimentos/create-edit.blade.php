@extends('template.template1')
       
@section('content')
<div class="container span7 text-center col-md-40 col-md-offset-0">
<h3 class="title-pg">Gestão do procedimento: <br> <b>{{$procedimento->nome ?? 'Novo'}}</b></h3>
    @if( isset($errors) && count($errors) > 0)
	<div class="alert alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    	</div>
    @endif

    <hr>
    @if( isset($procedimento))
        {!! Form::model($procedimento, ['route' => ['procedimento.update', $procedimento->id], 'class' => 'form', 'method' => 'put' ]) !!}    
    @else    
        {!! Form::open(['route' => 'procedimento.store', 'class' => 'form']) !!}    
    @endif
        <div style="background-color:lightblue; width: 950px; text-align: left">
            <div class="form-group" style="width: 250px">    		
                {!! Form::label('cod_sus', 'Código SUS:', ['class' => 'control-label']) !!}     		
                {!! Form::text('cod_sus', null, ['placeholder' => 'Código SUS:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 900px">           
                {!! Form::label('nome', 'Nome:', ['class' => 'control-label']) !!}          
                {!! Form::text('nome', null, ['placeholder' => 'Nome:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 65px">
                {!! Form::label('grupo', 'Grupo:', ['class' => 'control-label']) !!}                
               <!-- {!! Form::select('grupo', $grupos, null, ['class' => 'form-control']) !!} -->
               <select name="grupo" class="form-control">
                    <option>Escolha o Grupo</option>
                    @foreach($grupos as $grupo)
                    <option value="{{$grupo}}">{{$grupo}}</option>
                    @endforeach
               </select>               
            </div>

            <div class="form-group" style="width: 150px">
                {!! Form::label('valor', 'Valor: R$', ['class' => 'control-label']) !!}                
                {!! Form::text('valor', null, ['placeholder' => 'Valor:', 'class' => 'form-control']) !!}
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