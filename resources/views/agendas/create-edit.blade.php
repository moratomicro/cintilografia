@extends('template.header')

@extends('template.template')
    
@section('content')
<div class="container span7 text-center col-md-40 col-md-offset-0">
<h3 class="title-pg">Gestão das Agendas: <br> <b>{{$agenda->nome ?? 'Novo'}}</b></h3>
    @if( isset($errors) && count($errors) > 0)
	<div class="alert alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    	</div>
    @endif

    <hr>
    @if( isset($agenda))
        {!! Form::model($agenda, ['route' => ['agenda.update', $agenda->id], 'class' => 'form', 'method' => 'put' ]) !!}    
    @else    
        {!! Form::open(['route' => 'agenda.store', 'class' => 'form']) !!}    
    @endif
        <div style="background-color:lightblue; width: 950px; text-align: left">
            <div class="form-group" style="width: 500px">
                {!! Form::label('pacienteNome', 'pacientes:', ['class' => 'control-label']) !!}                
                <!-- {!! Form::select('pacienteNome', $pacientes, null, ['class' => 'form-control']) !!} -->
                <select name="pacienteNome" class="form-control">
                    <option>Paciente</option>
                    @foreach($pacientes as $paciente)
                    <option value="{{$paciente}}">{{$paciente->nome}}</option>
                    @endforeach
                </select>               
            </div>
            <div class="form-group" style="width: 800px">
                {!! Form::label('procedimento', 'Procedimento:', ['class' => 'control-label']) !!}                
                <!-- {!! Form::select('procedimento', $procedimentos, null, ['class' => 'form-control']) !!} -->
                <select name="procedimento" class="form-control">
                    <option>Procedimentos</option>
                    @foreach($procedimentos as $procedimento)
                    <option value="{{$procedimento}}">{{$procedimento->nome}}</option>
                    @endforeach
                </select>               
            </div>            

            <div class="form-group" style="width: 150px">
                {!! Form::label('dtExame', 'Data do Exame:', ['class' => 'control-label']) !!}                
                {!! Form::date('dtExame', null, ['placeholder' => 'Data do Exame:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 150px">
                {!! Form::label('horario', 'Horário:', ['class' => 'control-label']) !!}                
                {!! Form::time('horario', null, ['placeholder' => 'Horário:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 150px">
                {!! Form::label('mes', 'Mês:', ['class' => 'control-label']) !!}                
                {!! Form::text('mes', null, ['placeholder' => 'Mês:', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="width: 150px">
                {!! Form::label('ano', 'Ano:', ['class' => 'control-label']) !!}                
                {!! Form::text('ano', null, ['placeholder' => 'Ano:', 'class' => 'form-control']) !!}
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