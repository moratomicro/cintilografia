<body>
    <!-- INÍCIO DO MENU SUPERIOR -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #87CEFA;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: #000000; color: #000000;">
                        <i class="material-icons">menu</i>
                    </button>
                </div>
                

                <nav id="links-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="/" style="color: #000000;">Home</a></li>
                        <li><a href="{{route('municipio.index')}}" style="color: #000000;">Municípios</a></li>
                        <li><a href="{{route('municipio.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo</a></li>
                        
                        <li><a href="{{route('paciente.index')}}" style="color: #000000;">Pacientes</a></li>
                        <li><a href="{{route('paciente.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo Paciente</a></li>

                        <li><a href="{{route('agenda.index')}}" style="color: #000000;">Agendas</a></li>
                        <li><a href="{{route('agenda.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo</a></li>
                        
                        <li><a href="{{route('grupo.index')}}" style="color: #000000;">Grupos</a></li>
                        <li><a href="{{route('grupo.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo</a></li>

                        <li><a href="{{route('procedimento.index')}}" style="color: #000000;">Procedimentos</a></li>
                        <li><a href="{{route('procedimento.create')}}" style="color: #000000;"><span class="glyphicon glyphicon-plus"></span>Novo</a></li>
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