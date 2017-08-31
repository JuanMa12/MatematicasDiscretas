<header>
    <div class="romana_header_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-4">
                    <div class="romana_logo">
                        <a href="{{ url('/')}}"><img src="/images/logo.png" alt=""></a>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-sm-7">
                    <nav>
                        <ul class="main_menu text-center">
                            <li><a href="{{ url('/')}}">Inicio</a>
                            </li>
                            <li><a href="{{ url('/talleres')}}">Talleres</a>
                                <ul class="sub_menu">
                                    <li><a href="{{ url('/taller/logicaproposicional')}}">Logica Proposicional</a></li>
                                    <li><a href="{{ url('/taller/algebrabooleana')}}">Algebra Boolena</a></li>
                                    <li><a href="{{ url('/taller/conjuntos')}}">Conjuntos y Relaciones</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- nav End -->
                </div>
                <!-- column End -->
                <div class="col-sm-3">
                    <div class="header_right text-right">
                        <a href="{{ url('/talleres')}}" class="common_btn hvr-sweep-to-bottom">
                        1 CORTE</a>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- Header Bottom End -->
</header>
