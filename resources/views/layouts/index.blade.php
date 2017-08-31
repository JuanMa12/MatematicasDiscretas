@extends('template')

@section('content')
    <div class="romana_coures_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="romana_section_title">
                        <h2>Todos los Talleres</h2>
                        <p>Talleres de Matematicas Discretas</p>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="single_course text-center mr20">
                        <div class="single_course_bg single_course_bg1">
                            <div class="date_round">
                                <h4>22 <br>Ago</h4>
                            </div>
                        </div>
                        <div class="course_content">
                            <a href="#">
                                <h3>Logica Proposicional</h3>
                            </a>
                            <p>La lógica proposicional es un
                              sistema formal cuyos elementos más simples representan
                              proposiciones.</p>
                            <a href="{{ url('/taller/logicaproposicional')}}">
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
                                <h4>25 <br>Ago</h4>
                            </div>
                        </div>
                        <div class="course_content">
                            <a href="#">
                                <h3>Algebra Booleana</h3>
                            </a>
                            <p>El álgebra booleana es un sistema matemático deductivo centrado
                              en los valores cero y uno (falso y verdadero).</p>
                            <a href="{{ url('/taller/algebrabooleana')}}">
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
                                <h4>30 <br>Ago</h4>
                            </div>
                        </div>
                        <div class="course_content">
                            <a href="#">
                                <h3>Conjuntos y Relaciones</h3>
                            </a>
                            <p>Un conjunto es una colección de elementos considerada
                              en sí misma como un objeto.</p>
                            <a href="{{ url('/taller/conjuntos') }}">
                              <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Single Course End -->
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End  -->
        </div>
    </div>
<!-- ==========================================================
    * Cta_area Start *
============================================================ -->
    <div class="romana_cta_area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <h2>Ejercicios <br> Matematicas Discretas.</h2>
                    <div class="home_cta_btn">
                        <a href="{{ url('/talleres') }}" class="common_btn hvr-sweep-to-bottom">
                          VER TALLERES <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
<!-- ==========================================================
    * Teachers_area Start *
============================================================ -->
    <div class="romana_teachers_area sp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="romana_section_title">
                        <h2>Estudiantes</h2>
                        <p>Integrantes del grupo de trabajo</p>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single_teacher text-center">
                        <a href="#">
                            <div class="single_teacher_bg single_teacher_bg1"></div>
                        </a>
                        <div class="teacher_title">
                            <div class="title">
                                <a href="teacher.html">
                                    <h3>Juan Manuel Ruiz</h3>
                                </a>
                                <p>Desarrollador Web</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Service End -->
                </div>
                <!-- Column End -->
                <div class="col-md-4 col-sm-6">
                    <div class="single_teacher text-center">
                        <a href="teacher.html">
                            <div class="single_teacher_bg single_teacher_bg2"></div>
                        </a>
                        <div class="teacher_title">
                            <a href="teacher.html">
                                <h3>Sergio Andres Jimenez</h3>
                            </a>
                            <p>Profesional en infraestructura de redes</p>
                        </div>
                    </div>
                    <!-- Single Service End -->
                </div>
                <!-- Column End -->
                <div class="col-md-4 col-sm-6">
                    <div class="single_teacher text-center">
                        <a href="teacher.html">
                            <div class="single_teacher_bg single_teacher_bg3"></div>
                        </a>
                        <div class="teacher_title">
                            <a href="teacher.html">
                                <h3>Jeison Andres Casallas</h3>
                            </a>
                            <p>Desarrollador Web</p>
                        </div>
                    </div>
                    <!-- Single Service End -->
                </div>
            </div>
            <!-- Row End  -->
        </div>
    </div>

@endsection
