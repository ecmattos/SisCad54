@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('providers') !!}">Fornecedores</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'providers.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('providers.form')

	{!! Form::close() !!}

@endsection
