@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Patrimonios</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_types') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Tipos</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>


	{!! Form::model($patrimonial_type, ['route' => ['patrimonial_types.update', $patrimonial_type->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_types.form')

	{!! Form::close() !!}
	    
@endsection