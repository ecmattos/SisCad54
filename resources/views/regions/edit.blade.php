@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Localidades</li>
  		<li class="breadcrumb-item"><a href="{!! route('regions') !!}">Regiões</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($region, ['route' => ['regions.update', $region->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('regions.form')

	{!! Form::close() !!}
	    
@endsection