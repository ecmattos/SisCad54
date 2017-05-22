@extends('layouts.app')

@section('content')
	<ol class="breadcrumb">
  		<li class="breadcrumb-item"><b>Eventos</b></li>
	</ol>

	<div class="table-responsive">
		<table class="table table-bordered table-striped" id="table_meetings" data-toggle="table" data-toolbar="#filter-bar" data-show-toggle="false" data-search="false" data-show-filter="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-click-to-select="true" data-toolbar="#filter-bar"> 
			<thead>
				<tr>
					<th data-width="1%">
						<a href="{!! route('meetings.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Novo"><i class="fa fa-file-o"></i></a>
					</th>
					<th data-field="date" data-sortable="true">Data</th>
					<th data-field="meeting_type_id" data-sortable="true">Tipo</th>
					<th data-field="city_id" data-sortable="true">Cidade/UF</th>	
					<th data-field="region_id" data-sortable="true">Região</th>
					<th data-field="description" data-sortable="false">Descrição</th>
					<th data-field="participants_estimated_qty" data-sortable="false" data-align="right">Partic Prev</th>
					<th data-field="participants_confirmed_qty" data-sortable="false" data-align="right">Partic Confirm</th>
					<th data-field="participants_refunds_amount" data-sortable="false" data-align="right">R$ Reembolso</th>
					<th data-width="1%">#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($meetings as $meeting)
			        <tr>
			        	<td><a href="{!! route('meetings.edit', ['id' => $meeting->id]) !!}" type="button" class="round round-sm hollow blue"><i class='fa fa-edit'></i></a></td>
			        	<td>
			        		<a href="{!! route('meetings.attendance_list_reports', ['id' => $meeting->id]) !!}" type="button" class="round round-sm hollow primary" rel="tooltip" title="Lista Presença"><i class="fa fa-print"></i></a>
				        		@if($meeting->date!=null)
            	       				{{ $meeting->date->format('d/m/Y') }}
               					@endif
                  		</td>

				       	<td>{{ $meeting->meeting_type->description }}</td>
				       	<td>{{ $meeting->city->description }}/{{ $meeting->city->state->code }}</td>
				       	<td>{{ $meeting->city->region->description }}</td>
				       	<td>{{ $meeting->description }}</td>
				       	<td>{{ $meeting->participants_estimated_qty }}</td>
				       	<td>{{ $meeting->participants_confirmed_qty }}</td>
				       	<td>{{ number_format($meeting->participants_refunds_amount, 2,",",".") }}</td>
				       	<td>
				       		<a href="javascript:;" onclick="onDestroy('{!! route('meetings.destroy', [$meeting->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
				    	</td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('js_scripts')
	<script type="text/javascript">
	  	$('#table_meetings').bootstrapTable();
	</script>
@endsection