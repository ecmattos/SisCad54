@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_sectors') !!}">Setores</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($patrimonial_sector, ['route' => ['patrimonial_sectors.update', $patrimonial_sector->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_sectors.form')

	{!! Form::close() !!}
	    
@endsection