@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{!! route('members.search_results_back') !!}">Associados</a></li>
    	<li class="breadcrumb-item"><b>Alteração</b></li>
  	</ol>

	{!! Form::open(['route' => 'members.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "post"; ?>

	    @include('members.form')

	{!! Form::close() !!}

@endsection
