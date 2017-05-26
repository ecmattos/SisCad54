@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('members.search_results_back') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Associados</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	{!! Form::model($member, ['route' => ['members.update', $member->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    <?php $form_method = "put"; ?>

	    @include('members.form')

	{!! Form::close() !!}
	    
@endsection