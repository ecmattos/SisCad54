@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_brands') !!}">Marcas</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />
	
	{!! Form::open(['route' => 'patrimonial_brands.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_brands.form')

	{!! Form::close() !!}

@endsection
