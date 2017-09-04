@extends('template')

@section('content')

<div class="inner_page_hero_bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="display_table">
                    <div class="display_table_cell">
                        <div class="inner_page_hero_text">
                            <h2>Conjuntos y Relaciones</h2>
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
                                <p><strong style="font-size: 20px;">1. </strong> Dados: A = {a,b,c,d,f} , B = {a,b,f,g,h,i},
                                  C = {b,c,e,g,h} , D = {d,e,f,g,h,i,j} con U = {a,b,c,d,...,z}. Calcular:</strong></p>
                                <p><img src="/images_talleres/three/1/1-a.png" alt="1->a" class="img-responsive"></p>
                                <img src="/images_talleres/three/1/1.a-2.png" alt="1->a" class="img-responsive">
                                <p><img src="/images_talleres/three/1/1-b.png" alt="1->b" class="img-responsive"></p>
                                <img src="/images_talleres/three/1/1.b-2.png" alt="1->a" class="img-responsive">
                                <p><img src="/images_talleres/three/1/1-c.png" alt="1->c" class="img-responsive"></p>
                                <img src="/images_talleres/three/1/1.c-2.png" alt="1->a" class="img-responsive">
                            </div>
                        </div>

                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">2. </strong> Mediante un sombreado adecuado en el diagrama
                                de Venn, determine las operaciones indicadas:</p>
                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <p><img src="/images_talleres/three/2/2-a.png" alt="2->a" class="img-responsive"></p>
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/three/2/2-b.png" alt="2->a-2-mc" class="img-responsive">
                              <p><strong>c)</strong></p>
                              <img src="/images_talleres/three/2/2-c.png" alt="2->a-2-nand" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">3. </strong> Una encuesta con 100 estudiantes
                                produjo la siguiente estadistica:</p>
                                <div class="tex-center">
                                  <img src="/images_talleres/three/3/3.png" alt="3->a" class="img-responsive center-block">
                                </div>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/three/3/3-a.png" alt="3->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/three/3/3-b.png" alt="3->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c)</strong></p>
                              <img src="/images_talleres/three/3/3-c.png" alt="3->c" class="img-responsive">
                              <!-- d -->
                              <p><strong>d)</strong></p>
                              <img src="/images_talleres/three/3/3-d.png" alt="3->d" class="img-responsive">
                              <!-- e -->
                              <p><strong>e)</strong></p>
                              <img src="/images_talleres/three/3/3-e.png" alt="3->e" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">4. </strong> En una encuesta realizada a
                                800 personas sobre la preferencia para la lectura de noticias en periódicos
                                digitales como el <strong>Tiempo</strong>, el <strong>Espectador</strong> y el
                                <strong>Heraldo</strong>. Los resultados arrojados
                                 mediante las técnicas de muestreo son los siguientes:</p>
                              <p>200 personas leen el <strong>Tiempo</strong>.<br>
                                360 el <strong>Espectador</strong>.<br>
                                400 el <strong>Heraldo</strong>.<br>
                                70 el Tiempo y el <strong>Espectador</strong>.<br>
                                80 el Tiempo y el <strong>Heraldo</strong>.<br>
                                100 el Espectador y el <strong>Heraldo</strong>.<br>
                                30 los tres periódicos mencionados.</p>
                                <p>Determine:</p>

                                <div class="col-md-12">
                                  <img src="/images_talleres/three/4/4all.png" alt="4->a" class="img-responsive center-block">
                                </div>

                              <!-- a -->
                              <p><strong>a.) ¿Cuántos leen solamente el Tiempo?</strong></p>
                              <img src="/images_talleres/three/4/4-a-exercise.png" alt="4->b" class="img-responsive">
                              <!-- b -->
                              <p><strong>b.) ¿Cuántos en total leen solo un periódico?</strong></p>
                              <img src="/images_talleres/three/4/4-b-exercise.png" alt="4->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c.) ¿Cuántos en total leen únicamente dos periódicos?</strong></p>
                              <img src="/images_talleres/three/4/4-c-exercise.png" alt="4->c" class="img-responsive">
                              <!-- d -->
                              <p><strong>d.) ¿A cuántos no les apetece la lectura de estos?</strong></p>
                              <img src="/images_talleres/three/4/4-d-exercise.png" alt="4->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">5. </strong> Seah H = {Juan,Luis,Pedro,Miguel}
                                y M = {Amanda,Luisa,Bertha,Stella}:</p>

                              <!-- a -->
                              <p><strong>a) H * M</strong></p>
                              <p><img src="/images_talleres/three/5/5-a.png" alt="5->a" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b) M * H</strong></p>
                              <p><img src="/images_talleres/three/5/5-b.png" alt="5->a" class="img-responsive"></p>
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">6. </strong> Sea R la siguiente relacion en A = {1,2,3,4}
                                R = {(1,3),(1,4),(3,3),(3,2),(3,3),(3,4)}.</p>

                                <!-- a -->
                                <p><strong>a) Encuentre el dominio y el recorrorido de R</strong></p>
                                <img src="/images_talleres/three/6/6-a.png" alt="6->a" class="img-responsive">
                                <!-- b -->
                                <p><strong>b) Dibuje el grafico dirigido de R</strong></p>
                                <img src="/images_talleres/three/6/6-b.png" alt="6->b" class="img-responsive">
                                <!-- c -->
                                <p><strong>b) Encuentre R^(-1)</strong></p>
                                <img src="/images_talleres/three/6/6-c.png" alt="6->c" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">7. </strong> Sea W = {1,2,3,4} , considere la siguiente
                                realcion en W:<br>
                                R1 = {(1,1),(2,1)} <br>
                                R2 = {(1,3),(2,3),(4,1)} y <br>
                                R3 = {(1,1),(2,2),(3,3),(1,2),(2,1),(2,3),(3,1)}
                              </p>
                              <p>Determine cuales de las relaciones son:</p>

                              <!-- a -->
                              <p><strong>a) Reflexivas , Simetricas , Transitivas , De equivalencia</strong></p>
                              <img src="/images_talleres/three/7/7-all.png" alt="7->a" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">8. </strong> Establezca las operaciones de
                                Codd indicadas para el modelo relacional de las siguientes tablas de Bases de
                                datos. Escriba el tipo de operación.</p>
                              <div class="">
                                <img src="/images_talleres/three/8/8.png" alt="8->a" class="img-responsive center-block">
                              </div>

                              <!-- a -->
                              <p><strong>a)</strong> Listado de empleados que ganan hasta dos salarios mínimos,
                                con nombre, cargo, documento y salario.</p>
                              <img src="/images_talleres/three/8/8-a-exercise.png" alt="8->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)</strong> Seleccione  los cargos cuyos salarios superan el $1’500.000,00;
                                con IdCargo,  Cargo, Salario y Subsidio de transporte.</p>
                              <img src="/images_talleres/three/8/8-b-exercise.png" alt="8->b" class="img-responsive">
                              <!-- b -->
                              <p><strong>c)</strong> Juntar cargos y empleados.</p>
                              <img src="/images_talleres/three/8/8-c-exercise.png" alt="8->c" class="img-responsive">
                              <!-- b -->
                              <p><strong>d)</strong> Seleccionar de la tabla empleados aquellos que ganan menos
                                de $500.000,00 con nombre, documento y cargo.</p>
                              <img src="/images_talleres/three/8/8-d-exercise.png" alt="8->d" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->


                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="course_info">
                                <h2>Taller Informacion</h2>
                                <ul>
                                    <li>Fecha<span>30 - 08 - 17</span></li>
                                    <li>Total ejercicios<span>30</span></li>
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
