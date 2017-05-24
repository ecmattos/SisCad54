@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('meetings') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Eventos</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	{!! Form::model($meeting, ['route' => ['meetings.update', $meeting->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "put"; ?>

	    @include('meetings.form')

	{!! Form::close() !!}
	    
@endsection