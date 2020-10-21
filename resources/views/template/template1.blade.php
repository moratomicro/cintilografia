<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="tags, que, eu, quiser, usar, para, os, robos, do, google" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? 'EXAMES-SUS'}}</title>  
        
        <!-- icone -->
        <LINK REL="SHORTCUT ICON" HREF="/images/icone.ico">
        <meta name="description" content="">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- JAVASCRIPT E JQUERY -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        
    </head>

    <body>
        <!-- INÍCIO DO MENU SUPERIOR -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #2E9AFE;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: #000000; color: #000000;">
                        <i class="material-icons">menu</i>
                    </button>
                </div>
                

                <nav id="links-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" style="color: #000000;">Home</a></li>
                        <li><a href="{{route('municipio.index')}}" style="color: #000000;">Municípios</a></li>
                        <li><a href="{{route('municipio.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo Município</a></li>
                        
                        <li><a href="{{route('paciente.index')}}" style="color: #000000;">Pacientes</a></li>
                        <li><a href="{{route('paciente.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo Paciente</a></li>

                        <li><a href="{{route('agenda.index')}}" style="color: #000000;">Agendas</a></li>
                        <li><a href="{{route('agenda.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Agendar Paciente</a></li>
                        
                        <li><a href="{{route('grupo.index')}}" style="color: #000000;">Grupos</a></li>
                        <li><a href="{{route('grupo.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo Grupo</a></li>

                        <li><a href="{{route('procedimento.index')}}" style="color: #000000;">Procedimentos</a></li>
                        <li><a href="{{route('procedimento.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo Procedimento</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- FIM DO MENU SUPERIOR -->
        <br>
        <br>
        <hr>        
                
        
        <section class="container">
            @yield('content')
        </section>
 
        <footer class="footer">
            <h5>cismas.mg.gov.br</h5>
            <h5>agendamentosus@cismas.mg.gov.br</h5>
            <script src="jquery-3.0.0.min.js"></script>
            <script src="site.js"></script>
        </footer>                 
    </body>
</html>