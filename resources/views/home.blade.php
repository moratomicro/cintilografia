@extends('template.header')

@extends('template.template')

@section('content')
    <div>
        <h1><u>{{ $title ?? 'CINTILOGRAFIA SUS' }}</u></h1>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/painel/img1.jpg" alt="Imagem 1">
                <div class="carousel-caption">
                    ...
                </div>
            </div>

            <div class="item">
                <img src="img/painel/img2.jpg" alt="Imagem 2">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            
            <div class="item">
                <img src="img/painel/img3.jpeg" alt="Imagem 3">
                <div class="carousel-caption">
                    ...
                </div>
            </div>

            <div class="item">
                <img src="img/painel/img4.jpg" alt="Imagem 4">
                <div class="carousel-caption">
                    ...
                </div>
            </div>

            <div class="item">
                <img src="img/painel/img5.jpg" alt="Imagem 5">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        </div>
    <br />    
@stop

@extends('template.footer')