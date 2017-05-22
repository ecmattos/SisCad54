@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Localidades</li>
  		<li class="breadcrumb-item"><a href="{!! route('cities') !!}">Cidades</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />
	{!! Form::open(['route' => 'cities.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('cities.form')

	{!! Form::close() !!}

@endsection
