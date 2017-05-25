@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('management_units') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Unidade Gestoras</b></a></li>
		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	{!! Form::open(['route' => 'management_units.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('management_units.form')

	{!! Form::close() !!}

@endsection
