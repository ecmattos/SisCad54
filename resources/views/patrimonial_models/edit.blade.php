@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_models') !!}">Modelos</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($patrimonial_model, ['route' => ['patrimonial_models.update', $patrimonial_model->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_models.form')

	{!! Form::close() !!}
	    
@endsection