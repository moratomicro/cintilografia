@extends('template.header')

@extends('template.template')

@section('content')
    <div>
        <h1>{{ $title ?? 'Home Page' }}</h1>
    </div> 
@stop

@extends('template.footer')