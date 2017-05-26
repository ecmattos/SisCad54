@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Patrimônios</li>
  		<li class="breadcrumb-item"><b>Pesquisa</b></li>

  		<div class="btn-group btn-group-sm pull-right">
      		<a href="{!! route('patrimonials.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
    	</div>
	</ol>

	{!! Form::open(['route' => 'patrimonials.search_results', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonials.search_form')

	{!! Form::close() !!}

@endsection