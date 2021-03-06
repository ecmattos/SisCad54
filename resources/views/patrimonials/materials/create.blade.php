@extends('layouts.app')

@section('content')
	
	<div class="page-header text-primary">
	   	<h4>
	   		Patrimônios: Materiais - Inclusão
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('patrimonials') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
        	</div>
	   		<hr class="hr-primary" />
	   	</h4>
	</div>

	<div class="col-sm-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title"><b>{{ $patrimonial->code }} - {{ $patrimonial->description }}</b></h3>
			</div>

	    	<div class="panel-body">
		  		{!! Form::open(['route' => ['patrimonial_materials.store', $patrimonial->id], 'method' => 'post', 'class' => 'form-horizontal', 'role'=>'form']) !!}
		    		@include('patrimonials.materials.form')
				{!! Form::close() !!}
			</div> 
  		</div>
  	</div>

@endsection
