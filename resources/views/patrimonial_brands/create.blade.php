@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_brands') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Marcas</b></a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>
	
	{!! Form::open(['route' => 'patrimonial_brands.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_brands.form')

	{!! Form::close() !!}

@endsection
