@extends('template.header')

@extends('template.template')
    
@section('content')
    <div>
        <h1><u>{{ $title ?? 'Visualizar/Deletar Registro' }}</u></h1>
    </div> 
@stop

@extends('template.footer')