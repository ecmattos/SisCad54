@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Associados</li>
  		<li class="breadcrumb-item"><a href="{!! route('plans') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Planos</b></a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'plans.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('plans.form')

	{!! Form::close() !!}

@endsection
