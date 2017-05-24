@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('providers') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Fornecedores</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	{!! Form::model($provider, ['route' => ['providers.update', $provider->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('providers.form')

	{!! Form::close() !!}
	    
@endsection