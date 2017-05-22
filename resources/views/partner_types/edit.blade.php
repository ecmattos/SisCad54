@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Parceiros</li>
  		<li class="breadcrumb-item"><a href="{!! route('partner_types') !!}">Tipos</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($partner_type, ['route' => ['partner_types.update', $partner_type->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('partner_types.form')

	{!! Form::close() !!}
	    
@endsection