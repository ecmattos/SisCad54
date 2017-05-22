@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('meetings') !!}">Eventos</a></li>
  		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::open(['route' => 'meetings.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "post"; ?>

	    @include('meetings.form')

	{!! Form::close() !!}

@endsection
