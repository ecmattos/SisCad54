@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Eventos</li>
  		<li class="breadcrumb-item"><a href="{!! route('meeting_types') !!}">Tipos</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($meeting_type, ['route' => ['meeting_types.update', $meeting_type->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('meeting_types.form')

	{!! Form::close() !!}
	    
@endsection