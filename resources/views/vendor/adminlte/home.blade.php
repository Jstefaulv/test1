@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content')
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


	<div class="content">
		{{--@include('flash::message')--}}
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box box-primary ">
					<div class="box-body">
						<h4 class="box-title">
							Bienvenido
							<b class="text-primary">{{Auth::user()->name}}</b>
							@usernoops
							<small>No tiene ninguna opción asignada, solicite a un administrador que le asigne acciones</small>
							@endusernoops


						</h3>
					</div>
					<!-- /.fin segmento de dato de usuario -->
				</div>
				<!-- /.inicio body -->
				
				
				
				<!-- /.fin body -->

			</div>
		</div>
	</div>
	
@endsection
