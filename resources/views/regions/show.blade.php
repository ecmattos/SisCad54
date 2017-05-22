@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
      <li class="breadcrumb-item">Administração</li>
      <li class="breadcrumb-item">Localidades</li>
      <li class="breadcrumb-item"><a href="{!! route('cities') !!}">Regioes</a></li>
      <li class="breadcrumb-item"><b>Consulta</b></li>
  </ol>

  <hr class="hr-warning" />

  	<div class="row">
    	<div class="col-sm-8">
      		<div class="table-responsive">
      			<table class="table table-bordered table-striped">
          			<thead>
           				<th class="text-center" colspan="2"><h3><b>{{ $region->code }} - {{ $region->description }}</b></h3></th>
          			</thead>
          			<tbody>
          				<tr>
             				<td class="text-right">Código</td>
             				<td class="text-left">{{ $region->code }}</td>
           				</tr>

                  <tr>
                    <td class="text-right">Descrição</td>
                    <td class="text-left">{{ $region->description }}</td>
                  </tr>
          			</tbody>
        		</table>
      		</div>
    	</div>
    	<div class="col-sm-4">
    		@include('revisionable.logs_register')
      </div>
    </div>
	    
@endsection
  