@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Financeiro</li>
  		<li class="breadcrumb-item">Contabilidade</li>
  		<li class="breadcrumb-item"><a href="{!! route('accounting_accounts') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Plano de Contas</b></a></li>
  		<li class="breadcrumb-item"><b>Alteracão</b></li>
	</ol>

	{!! Form::model($accounting_account, ['route' => ['accounting_accounts.update', $accounting_account->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('accounting_accounts.form')

	{!! Form::close() !!}
	    
@endsection