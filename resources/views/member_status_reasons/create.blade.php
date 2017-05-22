@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Associados</li>
  		<li class="breadcrumb-item"><a href="{!! route('member_status_reasons') !!}">Situações - Motivos</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'member_status_reasons.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('member_status_reasons.form')

	{!! Form::close() !!}

@endsection
