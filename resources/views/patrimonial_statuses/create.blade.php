@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_statuses') !!}">Situação</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'patrimonial_statuses.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_statuses.form')

	{!! Form::close() !!}

@endsection
