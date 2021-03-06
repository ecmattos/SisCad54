<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
	<label for="date" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Data:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group date">
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			{!! Form::text('date', isset($meeting->date) ? $meeting->date->format('d/m/Y') : null, ['id'=>'date_datepicker', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
	<label for="description" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Descrição:</label>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('description', $value = null, ['class'=>'form-control', 'maxlength'=>'50']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('meeting_type_id') ? 'has-error' : '' }}">
	<label for="meeting_type_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Tipo:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('meeting_type_id', $meeting_types, $value = null, ['id'=>'meeting_types_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
	<label for="city_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Cidade:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
			{!! Form::select('city_id', $cities, $value = null, ['id'=>'cities_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('participants_estimated_qty') ? 'has-error' : '' }}">
	<label for="participants_estimated_qty" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Partic Previsão:</label>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-users"></i></span>
			{!! Form::text('participants_estimated_qty', $value = null, ['id'=>'participants_estimated_qty', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('participants_confirmed_qty') ? 'has-error' : '' }}">
	<label for="participants_confirmed_qty" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Partic Confirm:</label>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-users"></i></span>
			{!! Form::text('participants_confirmed_qty', $value = null, ['id'=>'participants_confirmed_qty', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('participants_refunds_amount') ? 'has-error' : '' }}">
	<label for="participants_refunds_amount" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Valor Reembolso:</label>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-money"></i></span>
			{!! Form::text('participants_refunds_amount', $value = null, ['id'=>'participants_refunds_amount', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	<label for="submit" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label"></label>
		<div class="form-group col-sm-4">
			<button type="submit" class="btn btn-success">Confirmar <i class="fa fa-check"></i></button>
			<a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar <i class="fa fa-times"></i></a>
		</div>
</div>

@section('js_scripts')
	<script type="text/javascript">
	  	$("#meeting_types_list, #cities_list").select2();
	  	$("#date_datepicker").datepicker(
	  		{
		        yearRange: '2010:'+(new Date).getFullYear()
		    }
    	);

    	$("#participants_refunds_amount").priceFormat(
  		{
 			prefix: '',
		    centsSeparator: ',', 
		    thousandsSeparator: '.',
		    limit: false,
		    centsLimit: 2,
		    clearPrefix: false,
		    allowNegative: false
  		});

  		$("#participants_estimated_qty, #participants_confirmed_qty").priceFormat(
  		{
 			prefix: '',
		    centsSeparator: ',', 
		    thousandsSeparator: '.',
		    limit: false,
		    centsLimit: 0,
		    clearPrefix: false,
		    allowNegative: false
  		});

	</script>
@endsection