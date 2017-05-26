@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{!! route('members.search_results_back') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Associados</b></a></li>
    	<li class="breadcrumb-item"><b>Inclusão</b></li>
  	</ol>

	{!! Form::open(['route' => 'members.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "post"; ?>

	    @include('members.form')

	{!! Form::close() !!}

@endsection
