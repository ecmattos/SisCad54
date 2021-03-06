@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Financeiro</li>
  		<li class="breadcrumb-item">Pagamentos</li>
  		<li class="breadcrumb-item"><a href="{!! route('payment_statuses') !!}">Situação</a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	<hr class="hr-warning" />

	{!! Form::model($payment_status, ['route' => ['payment_statuses.update', $payment_status->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('payment_statuses.form')

	{!! Form::close() !!}
	    
@endsection