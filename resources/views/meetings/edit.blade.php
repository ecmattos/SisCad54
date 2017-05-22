@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('meetings') !!}">Eventos</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($meeting, ['route' => ['meetings.update', $meeting->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "put"; ?>

	    @include('meetings.form')

	{!! Form::close() !!}
	    
@endsection