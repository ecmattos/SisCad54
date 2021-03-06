@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Parceiros</li>
  		<li class="breadcrumb-item"><a href="{!! route('partner_types') !!}">Tipos</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'partner_types.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('partner_types.form')

	{!! Form::close() !!}

@endsection
