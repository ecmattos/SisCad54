@extends('home')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('management_units') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Unidade Gestoras</b></a></li>
		<li class="breadcrumb-item"><b>Alteracão</b></li>
	</ol>

	{!! Form::model($management_unit, ['route' => ['management_units.update', $management_unit->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('management_units.form')

	{!! Form::close() !!}
	    
@endsection