@extends('layouts.app')

@section('content')
	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Parceiros</li>
  		<li class="breadcrumb-item"><b>Tipos</b></li>
	</ol>

	<div class="table-responsive">
		<table class="table table-bordered table-striped" id="table_partner_types" data-toggle="table" data-toolbar="#filter-bar" data-show-toggle="false" data-search="false" data-show-filter="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-click-to-select="true" data-page-list="[10, 20, 50, 100, All]" data-toolbar="#filter-bar"> 
		    <thead>
		        <th data-width="1%">
		        	<a href="{!! route('partner_types.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
		        </th>
		        <th data-width="2%">Código</th>
		        <th>Descrição</th>
		        <th data-width="1%" class="text-center">#</th>
		    </thead>
		    <tbody>
			    @foreach($partner_types as $partner_type)
			        <tr>
			            <td>
			                <a href="{!! route('partner_types.edit', [$partner_type->id]) !!}" type="button" class="round round-sm hollow blue"><i class="fa fa-edit"></i></a>
			            </td>
			            <td>{!! $partner_type->code !!}</td>
			            <td>{!! $partner_type->description !!}</td>
			            <td>
			            	<a href="javascript:;" onclick="onDestroy('{!! route('partner_types.destroy', [$partner_type->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
			            </td>
			        </tr>
			    @endforeach
		    </tbody>
		</table>
	</div>
@endsection

@section('js_scripts')
	<script type="text/javascript">
	  	$('#table_partner_types').bootstrapTable();
	</script>
@endsection