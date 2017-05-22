{!! Form::open(['route' => ['role_permissions.store', $role->id], 'class'=>'form-vertical', 'role'=>'form']) !!}
 	<div class="form-group">
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<div class="input-group input-group-sm">
				<span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
				{!! Form::select('permission_id', $role_permissions, null, ['id'=>'permissions_list', 'class'=>'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			<label for="submit" class="control-label"></label>
				<div class="form-group col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-left">
					<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button>
				</div>
		</div>
	</div>
{!! Form::close() !!}
