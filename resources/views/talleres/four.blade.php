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
                                <p><strong style="font-size: 20px;">1. </strong> Para cada uno de los siguientes grafos
                                  determine: Los grados de cada uno de los nodos, las matrices de incidencia y adyacencia.
                                  Con las matrices de adyacencia determine los niveles de recorrido desde el nodo A
                                  hasta el nodo D:</strong></p>
                                <p><img src="/images_talleres/four/1/1-a.png" alt="1->a" class="img-responsive"></p>
                                <img src="/images_talleres/four/1/1-a2.png" alt="1->a" class="img-responsive">
                                <p><img src="/images_talleres/four/1/1-b.png" alt="1->b" class="img-responsive hidden"></p>
                                <img src="/images_talleres/four/1/1.b-2.png" alt="1->b" class="img-responsive hidden">
                                <p><img src="/images_talleres/four/1/1-c.png" alt="1->c" class="img-responsive hidden"></p>
                                <img src="/images_talleres/four/1/1.c-2.png" alt="1->c" class="img-responsive hidden">
                            </div>
                        </div>

                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">2. </strong> Aplique las iteraciones apropiadas del
                                algoritmo de Dijkstra, para hallar la ruta mínima desde el nodo 1 hasta el 8, para el
                                siguiente grafo.</p>
                              <p><img src="/images_talleres/four/2/2-a.png" alt="2->a" class="img-responsive"></p>
                              <img src="/images_talleres/four/2/2-a2.png" alt="2->a-2" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">3. </strong> Construye el arbol binario correspondiente
                                y halle el valor de X para:</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/3/3-a.png" alt="3->a" class="img-responsive">
                              <p><img src="/images_talleres/four/3/3-a2.png" alt="3->a2" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/3/3-b.png" alt="3->b" class="img-responsive">
                              <p><img src="/images_talleres/four/3/3-b2.png" alt="3->b2" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">4. </strong> Para las siguientes funciones construya el
                                árbol binario y calcule las respectivas derivadas.</p>

                              <!-- a -->
                              <img src="/images_talleres/four/4/4-a.png" alt="4->a" class="img-responsive">
                              <p><img src="/images_talleres/four/4/4-a2.png" alt="4->a2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/4/4-a21.png" alt="4->a21" class="img-responsive"></p>
                              <!-- b -->
                              <img src="/images_talleres/four/4/4-b.png" alt="4->b" class="img-responsive">
                              <p><img src="/images_talleres/four/4/4-b2.png" alt="4->b2" class="img-responsive"></p>


                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">5. </strong> Para cada uno de los siguientes árboles
                                escriba las respectivas expresiones de los recorridos: pre_orden, in_orden y post_orden.
                                Implemente un algoritmo para uno de ellos. Represente el árbol de <strong>b</strong> como una lista doblemente
                                enlazada.</p>

                              <!-- a -->
                              <p><img src="/images_talleres/four/5/5-a.png" alt="5->a" class="img-responsive"></p>
                              <img src="/images_talleres/four/5/5-a2.png" alt="5->a2" class="img-responsive">
                              <!-- b -->
                              <p><img src="/images_talleres/four/5/5-b.png" alt="5->a" class="img-responsive"></p>
                              <img src="/images_talleres/four/5/5-b2.png" alt="5->b2" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">6. </strong> Se tienen tres cajas con transistores.
                                La caja A contiene 8, de los cuales 3 son defectuosos, la caja B contiene 6 de los
                                cuales 2 son defectuosos, y la caja C contiene 12 de los cuales 4 son defectuosos.
                                Construya el árbol de probabilidades y por medio de este determine: </p>
                                <!-- a -->
                                <p><strong>a: </strong> La probabilidad de escoger un artículo al azar de cada caja y no sean defectuosos.  </p>
                                <img src="/images_talleres/four/6/6-a.png" alt="6->a" class="img-responsive">
                                <!-- b -->
                                <p><strong>b: </strong> La probabilidad que uno sea defectuoso y los otros dos no. </p>
                                <img src="/images_talleres/four/6/6-b.png" alt="6->b" class="img-responsive">
                                <!-- c -->
                                <p><strong>c: </strong> La probabilidad de escoger un artículo defectuoso y que sea de la caja A.</p>
                                <img src="/images_talleres/four/6/6-c.png" alt="6->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">7. </strong> Mediante la regla de la cadena, dibuje el
                                respectivo árbol de relaciones y determine:</p>

                              <!-- a -->
                              <p><strong>a) </strong></p>
                              <p><img src="/images_talleres/four/7/7-a.png" alt="7->a" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/7/7-b.png" alt="7->b" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/7/7-c.png" alt="7->c" class="img-responsive"></p>

                              <p><img src="/images_talleres/four/7/7-a2.png" alt="7->a2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/7/7-a21.png" alt="7->a21" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/7/7-a22.png" alt="7->a22" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">8. </strong> Para los siguientes circuitos
                                determine la resistencia equivalente y la corriente total que circula en cada
                                uno.</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/8/8-a.png" alt="8->a" class="img-responsive">
                              <p><img src="/images_talleres/four/8/8-a2.png" alt="8->a2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/8/8-a21.png" alt="8->a21" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/8/8-b.png" alt="8->b" class="img-responsive">
                              <p><img src="/images_talleres/four/8/8-b2.png" alt="8->b2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/8/8-b21.png" alt="8->b21" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">9. </strong> Determine las corrientes que
                                 circulan, en cada circuito.</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/9/9-a.png" alt="9->a" class="img-responsive">
                              <p><img src="/images_talleres/four/9/9-a21.png" alt="9->a21" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/9/9-b.png" alt="9->b" class="img-responsive">
                              <p><img src="/images_talleres/four/9/9-b2.png" alt="9->b2" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">10. </strong> Calcule la transformanda y
                                la antitransformada para los siguientes casos:</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/10/10-a.png" alt="10->a" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-a2.png" alt="10->a2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-a21.png" alt="10->a21" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/10/10-b.png" alt="10->b" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-b2.png" alt="10->b2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-b21.png" alt="10->b21" class="img-responsive"></p>
                              <!-- c -->
                              <p><strong>c)</strong></p>
                              <img src="/images_talleres/four/10/10-c.png" alt="10->c" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-c2.png" alt="10->c2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-c21.png" alt="10->c21" class="img-responsive"></p>
                              <!-- d -->
                              <p><strong>d)</strong></p>
                              <img src="/images_talleres/four/10/10-d.png" alt="10->d" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-d2.png" alt="10->d2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-d21.png" alt="10->d21" class="img-responsive"></p>
                              <!-- e -->
                              <p><strong>e)</strong></p>
                              <img src="/images_talleres/four/10/10-e.png" alt="10->e" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-e2.png" alt="10->e2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-e21.png" alt="10->e21" class="img-responsive"></p>
                              <!-- f -->
                              <p><strong>f)</strong></p>
                              <img src="/images_talleres/four/10/10-f.png" alt="10->f" class="img-responsive">
                              <p><img src="/images_talleres/four/10/10-f2.png" alt="10->f2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/10/10-f21.png" alt="10->f21" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">11. </strong> Reduzca los siguientes diagramas
                                de bloques a uno solo. En la parte b, determine la funcion de transferencia
                                mediante la antitransformada de Laplace:</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/11/11-a.png" alt="11->a" class="img-responsive">
                              <p><img src="/images_talleres/four/11/11-a2.png" alt="11->a2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/11/11-a21.png" alt="11->a21" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/11/11-b.png" alt="11->b" class="img-responsive">
                              <p><img src="/images_talleres/four/11/11-b2.png" alt="11->b2" class="img-responsive"></p>
                              <p><img src="/images_talleres/four/11/11-b21.png" alt="11->b21" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">12. </strong> Repita el procedimineto anterior,
                                pero con diagramas de flujo de señal.</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/12/12-a.png" alt="12->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)</strong></p>
                              <img src="/images_talleres/four/12/12-b.png" alt="12->b" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">13. </strong> Dada la respectiva tabla
                                construya el diagrama de estados y el respectivo circuito con Flip-flops
                                tipo D.</p>

                              <!-- a -->
                              <p><strong>a)</strong></p>
                              <img src="/images_talleres/four/13/13-a.png" alt="13->a" class="img-responsive">
                              <p><img src="/images_talleres/four/13/13-a2.png" alt="13->a2" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b)</strong> Un circuito secuencial tiene tres multivibradores biestables,
                              A,B,C, una entrada X y una salida Y. El diagrma de estados se presenta en la figura.
                              Construya la respectiva tabla diseñe el circuito con Flip-Flops tipo D. Analice el circuito de que sea
                              autocorrectivo.</p>
                              <img src="/images_talleres/four/13/13-b.png" alt="13->b" class="img-responsive">
                              <p><img src="/images_talleres/four/13/13-b2.png" alt="13->b2" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="course_info">
                                <h2>Taller Informacion</h2>
                                <ul>
                                    <li>Fecha<span>20 - 09 - 17</span></li>
                                    <li>Total ejercicios<span>29</span></li>
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
