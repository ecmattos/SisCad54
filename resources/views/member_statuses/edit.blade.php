@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Associados</li>
  		<li class="breadcrumb-item"><a href="{!! route('member_statuses') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Situações</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($member_status, ['route' => ['member_statuses.update', $member_status->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('member_statuses.form')

	{!! Form::close() !!}
	    
@endsection