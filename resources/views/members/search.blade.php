@extends('layouts.app')

@section('content')
	
	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{!! route('dashboard.pc_members') !!}">Associados</a></li>
    	<li class="breadcrumb-item"><b>Pesquisa</b></li>

    	<div class="btn-group btn-group-sm pull-right">
      		<a href="{!! route('members.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
    	</div>
  	</ol>

  

	{!! Form::open(['route' => 'members.search_results', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('members.search_form')

	{!! Form::close() !!}

@endsection