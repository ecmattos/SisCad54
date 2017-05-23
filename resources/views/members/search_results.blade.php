@extends('layouts.app')

@section('content')
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><a href="{!! route('dashboard.pc_members') !!}">Associados</a></li>
  		<li class="breadcrumb-item"><b>Pesquisa</b></li>

  		<div class="btn-group btn-group-sm pull-right">
        		<a href="{!! route('members.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Novo"><i class="fa fa-file-o"></i></a>
	        	<a href="{!! route('members.search') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
	        </div>
	</ol>

	
        <div class="table-responsive">
        	<table class="table table-bordered table-striped" id="table_members" data-toggle="table" data-toolbar="#filter-bar" data-show-toggle="false" data-search="false" data-show-filter="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-click-to-select="true" data-page-list="[10, 20, 50, 100, All]" data-toolbar="#filter-bar"> 
				<thead>
					<tr>
						<th data-width="1%" class="text-center">
							<a href="{!! route('members.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Novo"><i class="fa fa-file-o"></i></a>
						</th>
						<th data-field="region_id" data-sortable="true">Região</th>
						<th data-field="city_id" data-sortable="true">Cidade/UF</th>
						<th data-field="plan_id" data-sortable="true">Plano</th>
						<th data-field="member_status_id" data-sortable="true">Situação</th>
						<th data-field="code" data-sortable="true" data-align="" width="2%">Matrícula</th>
						<th data-field="cpf" data-sortable="true">CPF</th>
						<th data-field="name" data-sortable="true">Nome</th>
						<th data-field="address">Endereço</th>
						<th data-field="neighborhood">Bairro</th>	
						<th data-field="zip_code">CEP</th>
						<th data-field="email" data-sortable="true">e-mail</th>
						<th data-field="phone">Fone</th>	
						<th data-field="mobile">Celular</th>
						<th data-field="comments">Obs</th>		
						<th data-width="1%" class="text-center">#</th>
					</tr>
				</thead>
				<tbody>
					@foreach($members as $member)
				        <tr>
				        	<td><a href="{!! route('members.edit', ['id' => $member->id]) !!}" type="button" class="round round-sm hollow blue"><i class='fa fa-edit'></i></a></td>
				        	<td>{{ $member->region_description }}</td>
				        	<td>{{ $member->city_description }}/{{ $member->state_code }}</td>
				        	<td>{{ $member->plan_description }}</td>
				        	<td>{{ $member->member_status_description }}</td>
				        	<td class="text-right"><a href="{!! route('members.show', ['id' => $member->id]) !!}">{{ $member->code }}</a></td></td>
							<td>{{ $member->cpf_mask }}</td>
				        	<td>{{ $member->name }}</td>
				        	<td>{{ $member->address }}</td>
				        	<td>{{ $member->neighborhood }}</td>
				        	<td>{{ $member->zip_code_mask }}</td>
				        	<td>{{ $member->email }}</td>
				        	<td>{{ $member->phone_mask }}</td>
				        	<td>{{ $member->mobile_mask }}</td>
				        	<td>{{ $member->comments }}</td>
				        	<td>
				        		<a href="javascript:;" onclick="onDestroy('{!! route('members.destroy', [$member->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
				       		</td>
				        </tr>
				    @endforeach
				</tbody>
			</table>
		</div>

@endsection

@section('js_scripts')
	<script type="text/javascript">
	  	$('#table_members').bootstrapTable();
	</script>
@endsection