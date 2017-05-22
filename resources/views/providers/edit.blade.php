@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('providers') !!}">Fonecedores</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($provider, ['route' => ['providers.update', $provider->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('providers.form')

	{!! Form::close() !!}
	    
@endsection