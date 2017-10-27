@extends('template')
<link href="{{ asset('/css/calculate.css') }}" rel="stylesheet" type="text/css">
@section('content')

<div class="inner_page_hero_bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="display_table">
                    <div class="display_table_cell">
                        <div class="inner_page_hero_text">
                            <h2>Calculadora de sistemas numericos</h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="active"><a href="{{ url('/calculate') }}">Calculadora</a></li>
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
				<center>
					<div>
						<h1></h1>
						<table class="table-cal">
							<tbody>
								<tr>

									<!-- first column -->
									<td>
										<table class="table-col">
											<tr>
												<td colspan="5" >
													<div id='pr' ></div>
												</td>
											</tr>

										  <tr>
												<td colspan="5">
													<input type="text"  id="num1"  onkeypress="return caracteres(event)">
												</td>
											</tr>

											<tr>
												<td colspan="3">
												<div id='cjOpr1'>
													<div class='Op' onclick="operar('sum')">+</div>
													<div class='Op' onclick="operar('res')">-</div>
													<div class='Op' onclick="operar('mul')">x</div>
													<div class='Op' onclick="operar('div')">/</div>
												</div>
												<div id='cjCif' style='margin:auto;width:250px;display:none'>
													<div class='Op2' onclick="cifrar()">Cifrar</div>
													<div class='Op2' onclick="decifrar()">Decifrar</div>
												</div>
												</td>
												<td colspan="2">
													<div id='cjOpr2' style="margin:auto;width:150px">
														<div class='Op' onclick="operar('')">=</div>
														<div class='OpL' onclick="limpiar()">Limpiar</div>
													</div>
												</td>
											</tr>
										</table>
									</td>
									<!-- end first column -->

									<!-- second column -->
									<td>
										<table class="table-col">
											<tr>
												<td width="10px">
													<input type='radio' class='fr' onclick='formato(this.value)' value='dec'  name='formato' checked>
												</td>
												<td>
													<div class='txtFr'>Decimal</div>
												</td>
											</tr>

											<tr>
												<td width="10px">
													<input type='radio' class='fr' onclick='formato(this.value)' value='bin' name='formato'>
												</td>
												<td>
													<div class='txtFr'>Binario</div>
												</td>
											</tr>

											<tr>
												<td width="10px">
													<input type='radio' class='fr' onclick='formato(this.value)' value='oct' name='formato'>
												</td>
												<td>
													<div class='txtFr'>Octal </div>
												</td>
											</tr>

											<tr>
												<td width="10px">
													<input type='radio' class='fr' onclick='formato(this.value)' value='hex'  name='formato'>
												</td>
												<td>
													<div class='txtFr'>Hexade </div>
												</td>
											</tr>
											<tr>
												<td width="10px">
													<input type='radio' class='fr' onclick='formato(this.value)' value='cif'  name='formato'>
												</td>
												<td>
													<div class='txtFr'>Cifrar </div>
												</td>
											</tr>
										</table>
									</td>
									<!-- end second column -->
								</tr>
							</tbody>
						</table>
					</div>
				</center>


			</div>
	</div>
</div>

<script src="{{ asset('/js/calculate.js') }}"></script>
@endsection
