@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('meetings') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Eventos</b></a></li>
		<li class="breadcrumb-item"><b>Inclusão</b></li>
	</ol>

	{!! Form::open(['route' => 'meetings.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "post"; ?>

	    @include('meetings.form')

	{!! Form::close() !!}

@endsection
