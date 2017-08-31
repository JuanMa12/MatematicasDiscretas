@extends('template')

@section('content')

<div class="inner_page_hero_bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="display_table">
                    <div class="display_table_cell">
                        <div class="inner_page_hero_text">
                            <h2>Logica Proposicional</h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="active"><a href="{{ url('/talleres') }}">talleres</a></li>
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

<div class="romana_course_detail_area sp">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="computer_science">
                                <p><strong style="font-size: 20px;">1. </strong> Formule en palabras las siguientes expresiones
                                  simbólicas utilizando las siguientes proposiciones y
                                  determine su valor de verdad: p = <strong>Marte es un Planeta;</strong> ,
                                  q = <strong>Napoleón fué un héroe latinoamericano;</strong> y
                                  r = <strong>Isaac Newton promulgó las leyes de la mecánica clásica.</strong></p>
                                <p><img src="/images_talleres/one/1/1-a.png" alt="1->a" class="img-responsive"></p>
                                <p><img src="/images_talleres/one/1/1-b.png" alt="1->b" class="img-responsive"></p>
                                <p><img src="/images_talleres/one/1/1-c.png" alt="1->c" class="img-responsive"></p>
                                <p><img src="/images_talleres/one/1/1-d.png" alt="1->d" class="img-responsive"></p>
                            </div>
                        </div>

                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">2. </strong> Sean p = <strong>"Luis lee la Prensa "</strong>,
                                q = <strong>"Luis lee el Mundo"</strong> y
                                r = <strong>"Luis lee el Universal"</strong>.
                                Escriba cada una de las siguientes proposiciones en forma simbólica.</p>
                              <!-- a -->
                              <p><strong>a)  Luis lee la Prensa o el Mundo, pero no el Universal</strong></p>
                              <img src="/images_talleres/one/2/2-solucion-a.png" alt="2->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)  Luis lee la Prensa y el Mundo, pero no lee la Prensa y el Universal.</strong></p>
                              <img src="/images_talleres/one/2/2-solucion-b.png" alt="2->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c)   No es cierto que Luis lee la Prensa pero no el Universal.</strong></p>
                              <img src="/images_talleres/one/2/2-solucion-c.png" alt="2->c" class="img-responsive">
                              <!-- d -->
                              <p><strong>d)   No es cierto que Luis lee el Universal o el Mundo pero no la Prensa.</strong></p>
                              <img src="/images_talleres/one/2/2-solucion-d.png" alt="2->d" class="img-responsive">revisar este
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">3. </strong> Para las siguientes expresiones: construya los
                                respectivos árboles, las tablas de verdad y determine si son tautologías,
                                contradicciones o contingencias.</p>
                              <!-- a -->
                              <img src="/images_talleres/one/3/3-a.png" alt="3->a" class="img-responsive">
                              <img src="/images_talleres/one/3/3-solucion-a.png" alt="3->a-2" class="img-responsive">
                              <!-- b -->
                              <img src="/images_talleres/one/3/3-b.png" alt="3->a" class="img-responsive">
                              <img src="/images_talleres/one/3/3-solucion-b.png" alt="3->b-2" class="img-responsive">
                              <!-- c -->
                              <img src="/images_talleres/one/3/3-c.png" alt="3->a" class="img-responsive">
                              <img src="" alt="3->c-2" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">4. </strong> Reduzca los siguientes polinomios a
                                formas normales disyuntiva y conjuntiva:</p>
                              <!-- a -->
                              <p><img src="/images_talleres/one/4/4-a.png" alt="4->a" class="img-responsive"></p>
                              <img src="/images_talleres/one/4/4-solucion-a.png" alt="4->a" class="img-responsive">
                              <!-- b -->
                              <p><img src="/images_talleres/one/4/4-b.png" alt="4->b" class="img-responsive"></p>
                              <img src="/images_talleres/one/4/4-solucion-b.png" alt="4->b" class="img-responsive">
                              <!-- c -->
                              <p><img src="/images_talleres/one/4/4-c.png" alt="4->c" class="img-responsive"></p>
                              <img src="/images_talleres/one/4/4-solucion-c.png" alt="4->c" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">5. </strong> De acuerdo a las respectivas
                                salidas determine la forma normal apropiada (conjuntiva o disyuntiva), y
                                reduzca el polinomio a su más mínima expresión, utilice las reglas de
                                reducción apropiadas:</p>
                              <div class="text-center">
                                <img src="/images_talleres/one/5/5.png" alt="4" class="img-responsive center-block">
                              </div>

                              <!-- all salidas -->
                              <p><strong>Salidas</strong></p>
                              <img src="/images_talleres/one/5/5-a.png" alt="4->a" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">6. </strong> Dadas las respectivas premisas,
                                establezca la inferencia lógica apropiada mediante el uso de
                                las reglas de inferencia:</p>

                              <!-- a -->
                              <div class="col-md-4"><strong>a)  p → ~r</strong>  :Premisa 1</div>
                              <div class="col-md-4"><strong>r → q</strong>    :Premisa 2</div>
                              <div class="col-md-4"><strong>p</strong>   :Premisa 3</div>
                              <div class="col-md-12">
                                <img src="" alt="6->a" class="img-responsive">
                              </div>

                              <!-- b -->
                              <div class="col-md-4"><strong>b) p → ~ (q v s)</strong>  :Premisa 1</div>
                              <div class="col-md-4"><strong>p</strong>  :Premisa 2</div>
                              <div class="col-md-4"><strong>t  → (q v s)</strong>  :Premisa 3</div>
                              <div class="col-md-12">
                                <img src="" alt="6->b" class="img-responsive">
                              </div>
                              <!-- c -->
                              <div class="col-md-4"><strong>c) (p v q)</strong>  :Premisa 1</div>
                              <div class="col-md-4"><strong> ~r </strong>  :Premisa 2</div>
                              <div class="col-md-4"><strong>q → r</strong>  :Premisa 3</div>
                              <div class="col-md-12">
                                <img src="" alt="6->c" class="img-responsive">
                              </div>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">7. </strong> Escriba los siguientes polinomios
                                lógicos en su equivalente Booleano:</p>

                              <!-- a -->
                              <p><img src="/images_talleres/one/7/7-a.png" alt="7->a" class="img-responsive"></p>
                              <img src="" alt="7->a-2" class="img-responsive">
                              <!-- b -->
                              <p><img src="/images_talleres/one/7/7-b.png" alt="7->b" class="img-responsive"></p>
                              <img src="" alt="7->b-2" class="img-responsive">
                              <!-- c -->
                              <p><img src="/images_talleres/one/7/7-c.png" alt="7->c" class="img-responsive"></p>
                              <img src="" alt="7->c-2" class="img-responsive">
                              <!-- d -->
                              <p><img src="/images_talleres/one/7/7-d.png" alt="7->d" class="img-responsive"></p>
                              <img src="" alt="7->d-2" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="course_info">
                                <h2>Taller Informacion</h2>
                                <ul>
                                    <li>Fecha<span>22 - 08 - 17</span></li>
                                    <li>Total ejercicios<span>22</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row End  -->
        </div>
        <!-- Container End  -->
    </div>

@endsection
