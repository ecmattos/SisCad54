@extends('layouts.app')

@section('content')
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><b>Fornecedores</b></li>
	</ol>

	<div class="table-responsive">
       	<table class="table table-bordered table-striped" id="table_providers" data-toggle="table" data-toolbar="#filter-bar" data-show-toggle="false" data-search="false" data-show-filter="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-click-to-select="true" data-page-list="[10, 20, 50, 100, All]" data-toolbar="#filter-bar"> 
			<thead>
				<tr>
					<th data-width="1%" class="text-center">
						<a href="{!! route('providers.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
					</th>
					<th data-field="cnpj" data-sortable="true">CNPJ</th>
					<th data-field="description" data-sortable="true">Descrição</th>
					<th data-field="address">Endereço</th>
					<th data-field="neighborhood">Bairro</th>
					<th data-field="city_id" data-sortable="true">Cidade/UF</th>
					<th data-field="zip_code">CEP</th>
					<th data-field="phone">Fone</th>
					<th data-field="mobile">Celular</th>
					<th data-field="email" data-sortable="true">E-mail</th>
					<th data-field="comments">Obs</th>		
					<th data-width="1%" class="text-center">#</th>
				</tr>
			</thead>
			<tbody>
			    @foreach($providers as $provider)
			        <tr>
			            <td>
			                <a href="{!! route('providers.edit', [$provider->id]) !!}" type="button" class="round round-sm hollow blue"><i class="fa fa-edit"></i></a>
			            </td>
			            <td><a href="{!! route('providers.show', [$provider->id]) !!}">{!! $provider->cnpj_mask !!}</a></td>
			            <td>{{ $provider->description }}</td>
			            <td>{{ $provider->address }}</td>
			            <td>{{ $provider->neighborhood }}</td>
			            <td>{{ $provider->city->description }}/{{ $provider->city->state->code }}</td>
			            <td>{{ $provider->zip_code_mask }}</td>
			            <td>{{ $provider->phone_mask }}</td>
					    <td>{{ $provider->mobile_mask }}</td>
					    <td>{{ $provider->email }}</td>
					    <td>{{ $provider->comments }}</td>
			            <td>
			            	<a href="javascript:;" onclick="onDestroy('{!! route('providers.destroy', [$provider->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
			            </td>
			        </tr>
			    @endforeach
		    </tbody>
		</table>
	</div>
@endsection

@section('js_scripts')
	<script type="text/javascript">
	  	$('#table_providers').bootstrapTable();
	</script>
@endsection