@extends('template')

@section('content')

<div class="inner_page_hero_bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="display_table">
                    <div class="display_table_cell">
                        <div class="inner_page_hero_text">
                            <h2>Sistemas Numericos</h2>
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
                                <p><strong style="font-size: 20px;">1. </strong> Convierta a binario, octal y hexadecimal
                                  los siguientes números en decimal::</strong></p>
                                <p><strong>a) </strong> 8543 <span class="text10">10</span> </p>
                                <img src="/images_talleres/five/1/1-a.png" alt="1->a" class="img-responsive">
                                <p><strong>b) </strong> 1856.23 <span class="text10">10</span></p>
                                <img src="/images_talleres/five/1/1.b.png" alt="1->b" class="img-responsive">
                                <p><strong>c) </strong> 3816.25 <span class="text10">10</span></p>
                                <img src="/images_talleres/four/1/1.c.png" alt="1->c" class="img-responsive">
                            </div>
                        </div>

                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">2. </strong> Convierta a decimal los siguientes números
                                en su base indicada:</p>
                              <p><strong>a) </strong> 7256 <span class="text10">8</span> </p>
                              <img src="/images_talleres/five/2/2-a.png" alt="2->a" class="img-responsive">
                              <p><strong>b) </strong> 1E5C.2E <span class="text10">16</span> </p>
                              <img src="/images_talleres/five/2/2-b.png" alt="2->b" class="img-responsive">
                              <p><strong>c) </strong> 1111000.111 <span class="text10">2</span> </p>
                              <img src="/images_talleres/five/2/2-c.png" alt="2->c" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">3. </strong> Calcule la adición y la
                                sustracción por complemento la base, de los siguientes pares de números:</p>

                              <!-- a -->
                              <p><strong>a)</strong> ( 7256<span class="text10">8</span>, 6286<span class="text10">8</span> )</p>
                              <img src="/images_talleres/five/3/3-a.png" alt="3->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)</strong> ( 1FE5C<span class="text10">16</span>, AFF5C<span class="text10">16</span> )</p>
                              <img src="/images_talleres/five/3/3-b.png" alt="3->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c)</strong> ( 1111100011<span class="text10">2</span>, 1111000010<span class="text10">2</span> )</p>
                              <img src="/images_talleres/five/3/3-c.png" alt="3->c" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">4. </strong> Sumar en BCD los siguientes números en decimal:</p>

                              <!-- a -->
                              <p><strong>a) </strong> 82 y 75</p>
                              <p><img src="/images_talleres/five/4/4-a21.png" alt="4->a" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b) </strong> 469 y 386</p>
                              <p><img src="/images_talleres/five/4/4-b.png" alt="4->b" class="img-responsive"></p>
                              <!-- c -->
                              <p><strong>c) </strong> 454 y -365</p>
                              <p><img src="/images_talleres/five/4/4-c.png" alt="4->c" class="img-responsive"></p>


                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">5. </strong> Sumar los siguientes números enteros
                                con signo en su equivalente de byte:</p>

                              <!-- a -->
                              <p><strong>a) </strong> (+16) con (+25)</p>
                              <img src="/images_talleres/five/5/5-a.png" alt="5->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b) </strong> (-26) con (+35)</p>
                              <img src="/images_talleres/five/5/5-b.png" alt="5->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c) </strong> (-36) con (+20)</p>
                              <img src="/images_talleres/five/5/5-c.png" alt="5->c" class="img-responsive">
                              <!-- d -->
                              <p><strong>d) </strong> (-56) con (-22)</p>
                              <img src="/images_talleres/five/5/5-d.png" alt="5->d" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">6. </strong> Calcule  el mcd(245,105),
                                mcd(440,225), mcd(1234,56); mediante la aplicación de los algoritmos de: </p>
                                <!-- a -->
                                <p><strong>a: </strong> Descomposición en factores primos.  </p>
                                <img src="/images_talleres/five/6/6-a.png" alt="6->a" class="img-responsive">
                                <!-- b -->
                                <p><strong>b: </strong> Diferencias. </p>
                                <img src="/images_talleres/five/6/6-b.png" alt="6->b" class="img-responsive">
                                <!-- c -->
                                <p><strong>c: </strong> Modulo de Euclides.</p>
                                <img src="/images_talleres/five/6/6-c.png" alt="6->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">7. </strong> Calcular:</p>

                              <!-- a -->
                              <p><strong>a) </strong> 14852<span class="text10">mod</span>314</p>
                              <p><img src="/images_talleres/five/7/7-a.png" alt="7->a" class="img-responsive"></p>
                              <!-- b -->
                              <p><strong>b) </strong> 5^8<span class="text10">mod</span>200</p>
                              <p><img src="/images_talleres/five/7/7-b.png" alt="7->b" class="img-responsive"></p>
                              <!-- c -->
                              <p><strong>c) </strong> 10^15<span class="text10">mod</span>61</p>
                              <p><img src="/images_talleres/five/7/7-c.png" alt="7->c" class="img-responsive"></p>
                              <!-- d -->
                              <p><strong>d) </strong> 14^150<span class="text10">mod</span>532</p>
                              <p><img src="/images_talleres/five/7/7-d.png" alt="7->d" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">8. </strong> Utilice el método de exponenciación
                                rápida (útil en técnicas de intercambio de clave y firma digital),
                                para calcular los valores de:</p>

                              <!-- a -->
                              <p><strong>a) </strong> 23^32<span class="text10">mod</span>51</p>
                              <img src="/images_talleres/five/8/8-a.png" alt="8->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b) </strong> 100^125<span class="text10">mod</span>201</p>
                              <img src="/images_talleres/five/8/8-b.png" alt="8->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c) </strong> 125^512<span class="text10">mod</span>2500</p>
                              <img src="/images_talleres/five/8/8-c.png" alt="8->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">9. </strong> Calcular:</p>

                              <!-- a -->
                              <p><strong>a)</strong> Ø(17)</p>
                              <img src="/images_talleres/five/9/9-a.png" alt="9->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b)</strong> Ø(77)</p>
                              <img src="/images_talleres/five/9/9-b.png" alt="9->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c)</strong> Ø(200)</p>
                              <img src="/images_talleres/five/9/9-c.png" alt="9->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">10. </strong> Elabore un breve resumen sobre el
                                artículo denominado: <strong> “BASES MATEMÁTICAS DESARROLLADAS EN EL AULA DE CLASE PARA LA
                                SEGURIDAD DE LOS DATOS EN REDES”</strong>, publicado en la revista universitaria
                                ED N° 2 de 2014, página 59.</p>

                              <!-- a -->
                              <p><strong>Resumen:</strong></p>
                              <img src="/images_talleres/five/10/10.png" alt="10" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">11. </strong> Utilice la expresión de aproximación
                                RSA (n + 15)mod28, para cifrar las siguientes palabras. Y Aplique la expresión
                                (n-15)mod28 para descifrar estos mensajes</p>

                              <!-- a -->
                              <p><strong>a) ENCRIPTAR EL MUNDO </strong></p>
                              <img src="/images_talleres/five/11/11-a.png" alt="11->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b) LA CALLE ESTA ILUMINADA </strong></p>
                              <img src="/images_talleres/five/11/11-b.png" alt="11->b" class="img-responsive">
                              <!-- c -->
                              <p><strong>c) BOLIVAR EL LIBERTADOR </strong></p>
                              <img src="/images_talleres/five/11/11-c.png" alt="11->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">12. </strong> Sean p=17, q=23, n=31. Aplique
                                el método RSA de encriptado para realizar los siguientes cálculos: z, Ø, s;
                                cifre 101, 200; descifre 300, 250.</p>

                              <!-- a -->
                              <img src="/images_talleres/five/12/12-a.png" alt="12->a" class="img-responsive">
                              <p><img src="/images_talleres/five/12/12-b.png" alt="12->b" class="img-responsive"></p>
                              <p><img src="/images_talleres/five/12/12-c.png" alt="12->c" class="img-responsive"></p>
                              <p><img src="/images_talleres/five/12/12-d.png" alt="12->d" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">13. </strong> Encontrar una fórmula que sea recurrente,
                                de tal manera que sirva para digitalizar las siguientes funciones: a.) Sen2X, b.) CosX, c.)
                                e3x con la aproximación de cinco derivadas e implemente la codificación respectiva en Matlab.</p>

                              <!-- a -->
                              <img src="/images_talleres/five/13/13-a.png" alt="13->a" class="img-responsive">
                              <p><img src="/images_talleres/five/13/13-b.png" alt="13->b" class="img-responsive"></p>
                              <p><img src="/images_talleres/five/13/13-c.png" alt="13->c" class="img-responsive"></p>

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">14. </strong> Calcule las combinaciones y
                                permutaciones indicadas:</p>

                              <!-- a -->
                              <p><strong>a) </strong>7C <span class="text10">3</span> y 7P<span class="text10">3</span></p>
                              <img src="/images_talleres/five/14/14-a.png" alt="14->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b) </strong>10C <span class="text10">2</span> y 10P<span class="text10">2</span></p>
                              <img src="/images_talleres/five/14/14-b.png" alt="14->b" class="img-responsive">
                              <!-- a -->
                              <p><strong>c) </strong>16C <span class="text10">4</span> y 16P<span class="text10">4</span></p>
                              <img src="/images_talleres/five/14/14-c.png" alt="14->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">15. </strong> Utilice la combinatoria para hacer la
                                expansión de los siguientes binomios:</p>

                              <!-- a -->
                              <p><strong>a) </strong>  (x – 3)^6</p>
                              <img src="/images_talleres/five/15/15-a.png" alt="15->a" class="img-responsive">
                              <!-- b -->
                              <p><strong>b) </strong> (x + 5)^8</p>
                              <img src="/images_talleres/five/15/15-b.png" alt="15->b" class="img-responsive">
                              <!-- a -->
                              <p><strong>c) </strong> (2 + y)^10</p>
                              <img src="/images_talleres/five/15/15-c.png" alt="15->c" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">16. </strong> Una clase se compone de 12 niños y 10 niñas.
                                Hallar el número de posibilidades que tiene un profesor de elegir un comité de:
                                <strong>a.) </strong>de 6.
                                <strong>b.) </strong> 4 niños y 3 niñas.
                                <strong>c.) </strong> 4 niños o 4 niñas.
                                <strong>d.) </strong> Al menos una niña.</p>

                              <!-- a -->
                              <img src="/images_talleres/five/16/16-a.png" alt="16->a" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">17. </strong> Cuántas palabras o cifras se pueden
                                expresar con los elementos de los siguientes conjuntos:
                                 <strong>a.) </strong> {C,A,M,I,S.A}
                                 <strong>b.) </strong> {2,4,6,8}
                                 <strong>c.) </strong> {m,u,r,c,i,e,l,a,g,o}</p>

                              <!-- a -->
                              <img src="/images_talleres/five/17/17-a.png" alt="17->a" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">18. </strong> Se tira un par de dados.
                                Sea X el menor de los dos números que salen. Determinar el espacio muestral,
                                el rango RX, la distribución de probabilidad y la esperanza de X.</p>

                              <!-- a -->
                              <img src="/images_talleres/five/18/18-a.png" alt="18->a" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">19. </strong> Un jugador tira tres monedas.
                                Gana $500 si salen tres caras,  $300 si salen dos caras y $100 si sale una.
                                Por otra parte, pierde $1000 si salen tres sellos. Hallar el valor del
                                juego para el jugador.</p>

                              <!-- a -->
                              <img src="/images_talleres/five/19/19-a.png" alt="19->a" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">20. </strong> Calcular la media, la varianza y la
                                desviación típica de la siguiente distribución: Elabore un gráfico de barras. </p>

                              <!-- a -->
                              <p><img src="/images_talleres/five/20/20-a.png" alt="20->a" class="img-responsive"></p>
                              <img src="/images_talleres/five/20/20-a2.png" alt="20->a2" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->
                    <!-- Row End  -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="course_des">
                              <p><strong style="font-size: 20px;">21. </strong> Considere la distribución conjunta de
                                X e Y que se muestra en la siguiente tabla. Con los datos consignados allí, determine:
                                E(X), E(Y), cov(X,Y), σX, σY y ρ(X,Y). </p>

                              <!-- a -->
                              <p><img src="/images_talleres/five/21/21-a.png" alt="21->a" class="img-responsive"></p>
                              <img src="/images_talleres/five/21/21-a2.png" alt="21->a2" class="img-responsive">

                            </div>
                        </div>
                    </div>
                    <!-- Row End  -->

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="course_info">
                                <h2>Taller Informacion</h2>
                                <ul>
                                    <li>Fecha<span>10 - 11 - 17</span></li>
                                    <li>Total ejercicios<span>50</span></li>
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
