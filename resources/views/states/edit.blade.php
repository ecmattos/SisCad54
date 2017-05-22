@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Localidades</li>
  		<li class="breadcrumb-item"><a href="{!! route('states') !!}">Estados</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($state, ['route' => ['states.update', $state->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('states.form')

	{!! Form::close() !!}
	    
@endsection