<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
	<label for="code" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Matricula:</label>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('code', $value = null, ['class'=>'form-control', 'maxlength'=>'10']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
	<label for="cpf" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CPF:</label>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('cpf', $value = null, ['class'=>'form-control', 'maxlength'=>'11']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	<label for="name" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome completo:</label>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('name', $value = null, ['class'=>'form-control', 'maxlength'=>'50']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('plan_id') ? 'has-error' : '' }}">
	<label for="plan_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Plano:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('plan_id', $plans, $value = null, ['id'=>'plans_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('gender_id') ? 'has-error' : '' }}">
	<label for="gender_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Sexo:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('gender_id', $genders, $value = null, ['id'=>'genders_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
	<label for="email" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">e-mail:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			{!! Form::input('email', 'email', $value = null, ['class'=>'form-control', 'maxlength'=>'40']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
	<label for="address" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Endereço:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('address', $value = null, ['class'=>'form-control', 'maxlength'=>'50']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : '' }}">
	<label for="neighborhood" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Bairro:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('neighborhood', $value = null, ['class'=>'form-control', 'maxlength'=>'30']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
	<label for="city_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Cidade:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('city_id', $cities, $value = null, ['id'=>'cities_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
	<label for="zip_code" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CEP:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('zip_code', $value = null, ['class'=>'form-control', 'maxlength'=>'9']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }} ">
	<label for="phone" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Telefone:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-phone"></i></span>
			{!! Form::text('phone', $value = null, ['id'=>'phone', 'class'=>'form-control', 'maxlength'=>'11']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }} ">
	<label for="mobile" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Celular:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
			{!! Form::text('mobile', $value = null, ['id'=>'mobile', 'class'=>'form-control', 'maxlength'=>'11']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
	<label for="birthday" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nascimento:</label>
	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<div class="input-group date">
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			{!! Form::text('birthday', isset($member->birthday) ? $member->birthday->format('d/m/Y') : null, ['id'=>'birthday_datepicker', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('member_status_id') ? 'has-error' : '' }}">
	<label for="member_status_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Situação:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('member_status_id', $member_statuses, $value = null, ['id'=>'member_statuses_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('date_aafc_ini') ? 'has-error' : '' }}">
	<label for="date_aafc_ini" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Ativo:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			{!! Form::text('date_aafc_ini', isset($member->date_aafc_ini) ? $member->date_aafc_ini->format('d/m/Y') : null, ['id'=>'date_aafc_ini_datepicker', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('date_aafc_fim') ? 'has-error' : '' }}">
	<label for="date_aafc_fim" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Inativo:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
		<div class="input-group date">
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			{!! Form::text('date_aafc_fim', isset($member->date_aafc_fim) ? $member->date_aafc_fim->format('d/m/Y') : null, ['id'=>'date_aafc_fim_datepicker', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('member_status_reason_id') ? 'has-error' : '' }}">
	<label for="member_status_reason_id" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Motivo:</label>
	<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::select('member_status_reason_id', $member_status_reasons, $value = null, ['id'=>'member_status_reasons_list', 'class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
	<label for="comments" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Observações:</label>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<div class="input-group input-group-sm">
			<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
			{!! Form::text('comments', $value = null, ['class'=>'form-control', 'maxlength'=>'200']) !!}
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
	  	$("#plans_list, #member_statuses_list, #member_status_reasons_list, #genders_list, #cities_list").select2();
	  	$("#birthday_datepicker, #date_aafc_ini_datepicker, #date_aafc_fim_datepicker").datepicker(
	  		{
		        yearRange: '1920:'+(new Date).getFullYear(),
		        maxDate: "today()"
		    }
    	);
	</script>
@endsection