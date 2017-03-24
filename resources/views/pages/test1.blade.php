@extends('layouts.app')

@section('title','Test Iidentificacion')

@section('styles')
	
@stop

@section('content')
	<!--Pregunta 1-->
	<div id="1" style="display: block;">
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1>Test de Identificación</h1>
			<h2>#1 ¿Cuando se trata de amigos?</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>No tengo el apoyo de nadie</span><br><button type="button" class="btn btn-warning" id="B11">A</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Son pocas las personas que me agradan</span><br><button type="button" class="btn btn-warning" id="B12">B</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Tengo muy buena relación con todos</span><br><button type="button" class="btn btn-warning" id="B13">C</button></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div>
	</div>
	<!---->
	<!--Pregunta 2-->
	<div id="2" style="display: none;">
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1>Test de Identificación</h1>
			<h2>#2 ¿Eres empático con las personas que te rodean?</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Nunca</span><br><button type="button" class="btn btn-warning" id="B21">A</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>A veces</span><br><button type="button" class="btn btn-warning" id="B22">B</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Siempre</span><br><button type="button" class="btn btn-warning" id="B23">C</button></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div>
	</div>
	<!---->
	<!--Pregunta 3-->
	<div id="3" style="display: none;">
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1>Test de Identificación</h1>
			<h2>#3 ¿Cuando surge un problema, tú?</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Ves la manera de resolverlo solo, pedir ayuda es signo de debilidad</span><br><button type="button" class="btn btn-warning" id="B31">A</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>No sabes que hacer</span><br><button type="button" class="btn btn-warning" id="B32">B</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Buscas ayuda porque sabes que necesitas trabajar en equipo</span><br><button type="button" class="btn btn-warning" id="B33">C</button></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div>
	</div>
	<!---->
	<!--Pregunta 4-->
	<div id="4" style="display: none;">
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1>Test de Identificación</h1>
			<h2>#4 ¿Cúmples tus metas?</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Tardo mucho tiempo pero al final consigo cumplirlas</span><br><button type="button" class="btn btn-warning" id="B41">A</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Rara vez</span><br><button type="button" class="btn btn-warning" id="B42">B</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Me organizo de tal forma que las cumpla al cien por ciento y a tiempo</span><br><button type="button" class="btn btn-warning" id="B43">C</button></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div>
	</div>
	<!---->
	<!--Pregunta 5-->
	<div id="5" style="display: none;">
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1>Test de Identificación</h1>
			<h2>#5 Cuando algo no te hace sentir bien,¿ tú?</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Te dejas llevar por tus problemas</span><br><button type="button" class="btn btn-warning" id="B51">A</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Culpas a los demás</span><br><button type="button" class="btn btn-warning" id="B52">B</button></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span>Simplemente lo dejas ir y sigues adelante</span><br><button type="button" class="btn btn-warning" id="B53">C</button></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
	</div>
	</div>
	<!---->
@stop

@section('scripts')
	<script>
	$('#B11').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="block";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B12').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="block";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B13').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="block";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B21').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="block";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B22').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="block";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B23').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="block";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
	});
	$('#B31').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="block";
		document.getElementById("5").style.display="none";
	});
	$('#B32').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="block";
		document.getElementById("5").style.display="none";
	});
	$('#B33').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="block";
		document.getElementById("5").style.display="none";
	});
	$('#B41').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="block";
	});
	$('#B42').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="block";
	});
	$('#B43').click(function() {
	  	document.getElementById("1").style.display="none";
 		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="block";
	});
	</script>
@stop