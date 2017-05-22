@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Associados</li>
  		<li class="breadcrumb-item"><a href="{!! route('member_statuses') !!}">Situações</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'member_statuses.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('member_statuses.form')

	{!! Form::close() !!}

@endsection
