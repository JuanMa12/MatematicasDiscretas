@extends('template')

@section('content')

<div class="inner_page_hero_bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="display_table">
                    <div class="display_table_cell">
                        <div class="inner_page_hero_text">
                            <h2>Todos los talleres</h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="active"><a href="#">Talleres</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- ==========================================================
* Courses_area Start *
============================================================ -->
<div class="romana_coures_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="single_course text-center mr20">
                    <div class="single_course_bg single_course_bg1">
                        <div class="date_round">
                            <h4>22 <br>Ago</h4>
                        </div>
                    </div>
                    <div class="course_content">
                        <a href="{{ url('/taller/logicaproposicional') }}">
                            <h3>Logica Proposicional  - 1Corte</h3>
                        </a>
                        <p>La lógica proposicional o lógica de orden cero es un
                          sistema formal cuyos elementos más simples representan
                          proposiciones.</p>
                        <a href="{{ url('/taller/logicaproposicional') }}">
                          <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single Course End -->
            </div>
            <!-- Column End -->
            <div class="col-sm-4">
                <div class="single_course text-center mlr10">
                    <div class="single_course_bg single_course_bg2">
                        <div class="date_round">
                            <h4>27 <br>Ago</h4>
                        </div>
                    </div>
                    <div class="course_content">
                        <a href="{{ url('/taller/algebrabooleana') }}">
                            <h3>Algebra Booleana - 1Corte</h3>
                        </a>
                        <p>El álgebra booleana es un sistema matemático deductivo centrado
                          en los valores cero y uno (falso y verdadero).</p>
                        <a href="{{ url('/taller/algebrabooleana') }}">
                          <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single Course End -->
            </div>
            <!-- Column End -->
            <div class="col-sm-4">
                <div class="single_course text-center ml20">
                    <div class="single_course_bg single_course_bg3">
                        <div class="date_round">
                            <h4>05 <br>Sep</h4>
                        </div>
                    </div>
                    <div class="course_content">
                        <a href="#">
                            <h3>Proximamente</h3>
                        </a>
                        <p>...</p>
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single Course End -->
            </div>
            <!-- Column End -->
        </div>
    </div>
    <!-- Container End  -->
</div>

@endsection
