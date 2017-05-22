@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Associados</li>
  		<li class="breadcrumb-item"><a href="{!! route('member_status_reasons') !!}">Situações - Motivos</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($member_status_reason, ['route' => ['member_status_reasons.update', $member_status_reason->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('member_status_reasons.form')

	{!! Form::close() !!}
	    
@endsection