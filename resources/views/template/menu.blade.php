<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#87CEFA;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: #000000; color: #fff;">
                        <i class="material-icons">menu</i>
                    </button>
                </div>                

                <nav class="collapse navbar-collapse">
                    <ul class="menu"> <!-- Esse é o nivel 1 ou o nivel principal -->
                        <li class=""><a href="/">Home</a></li>

                        <li class=""><a href="/">Agendas</a>
                            <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                                <li><a href="{{route('agenda.index')}}">Agenda Mensal</a></li>
                                <li><a href="{{route('agenda.create')}}"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                            </ul>
                        </li>

                        <li class=""><a href="/">Pacientes</a>
                            <ul class="submenu-1">
                                <li><a href="{{route('paciente.index')}}">Pacientes</a></li>
                                <li><a href="{{route('paciente.create')}}"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                            </ul>
                        </li>
                        
                        <li class=""><a href="/">Municípios</a>
                            <ul class="submenu-1">    
                                <li><a href="{{route('municipio.index')}}">Municípios</a></li>
                                <li><a href="{{route('municipio.create')}}"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                            </ul>
                        </li>
                        

                        <li class=""><a href="/">Procedimentos</a>
                            <ul class="submenu-1">
                                <li><a href="{{route('procedimento.index')}}">Procedimentos</a></li>
                                <li><a href="{{route('procedimento.create')}}"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                            </ul>
                        </li>
                        
                        <li class=""><a href="/">Grupos</a>
                            <ul class="submenu-1">
                                <li><a href="{{route('grupo.index')}}">Grupos</a></li>
                                <li><a href="{{route('grupo.create')}}"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>