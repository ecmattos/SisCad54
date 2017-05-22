@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('affiliated_societies') !!}">Filiais</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'affiliated_societies.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('affiliated_societies.form')

	{!! Form::close() !!}

@endsection
