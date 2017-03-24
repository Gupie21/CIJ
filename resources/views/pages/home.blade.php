@extends('layouts.app')

@section('title','Home')

@section('styles')
	<link href="{{ asset('css/home.css')}}" rel="stylesheet">
@stop

@section('content')
	<div class="row" style="margin-top: 100px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="jumbotron jumbotron-fluid midete">
				<div class="container">
					<h2>
						Mídete <i class="fa fa-beer" aria-hidden="true"></i>
					</h2>
					<hr>
					<p>
						<b>RELAJATE, CONTROLA TUS EMOCIONES</b>
					</p>
					<a href="{{ route('get-midete') }}">
						<button type="button" class="btn btn-warning btnmidete">Entrar</button>
					</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="jumbotron jumbotron-fluid noteabras">
				<div class="container">
					<h2>
						No te Abras <i class="fa fa-slideshare" aria-hidden="true"></i>
					</h2>
					<hr>
					<p>
						<b>INTEGRATE, NO TE APARTES</b>
					</p>
					<button type="button" class="btn btn-warning btnnoteabras">Entrar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="jumbotron jumbotron-fluid conmigo">
				<div class="container">
					<h2>
						¿Qué onda conmigo? <i class="fa fa-smile-o" aria-hidden="true"></i>
					</h2>
					<hr>
					<p>
						<b>TENGO PROBLEMAS, ¿QUÉ HAGO?</b>
					</p>
					<button type="button" class="btn btn-warning btnconmigo">Entrar</button>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="jumbotron jumbotron-fluid losdemas">
				<div class="container">
					<h2>
						¿Qué onda con los demas? <i class="fa fa-users" aria-hidden="true"></i>
					</h2>
					<hr>
					<p>
						<b>A NADIE LE GUSTA LA VIOLENCIA</b>
					</p>
					<button type="button" class="btn btn-warning btnlosdemas">Entrar</button>
				</div>
			</div>
		</div>
	</div>
@stop