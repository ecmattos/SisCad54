@extends('home')

@section('content')
	
	<div class="page-header text-primary">
	   	<h4>
	   		Serviços: Inclusão
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('services') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
        	</div>
	   		<hr class="hr-primary" />
	   	</h4>
	</div>

	{!! Form::open(['route' => 'services.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('services.form')

	{!! Form::close() !!}

@endsection
