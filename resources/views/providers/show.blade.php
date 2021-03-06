@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{!! route('providers') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Fornecedores</b></a></li>
    <li class="breadcrumb-item"><b>Consulta</b></li>

    <div class="btn-group btn-group-sm pull-right">
      <a href="{!! route('providers.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
      <a href="{!! route('providers.edit', ['id' => $provider->id]) !!}" type="button" class="round round-sm hollow blue" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
      <a href="{!! route('providers') !!}" type="button" class="round round-sm hollow red" rel="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></a>
    </div>
  </ol>

  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><b>{{ $provider->description }}</b></h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <td class="text-right" width="25%">Código</td>
                  <td class="text-left">{{ $provider->code }}</td>
                </tr>

                <tr>
                  <td class="text-right">CPF</td>
                  <td class="text-left">{{ $provider->cnpj_mask }}</td>
                </tr>
                
                <tr>
                  <td class="text-right">Endereço</td>
                  <td class="text-left">{{ $provider->address }}</td>
                </tr>

                <tr>
                  <td class="text-right">Bairro</td>
                  <td class="text-left">{{ $provider->neighborhood }}</td>
                </tr>

                <tr>
                  <td class="text-right">Cidade</td>
                  <td class="text-left">{{ $provider->city->description }} / {{ $provider->city->state->code }}</td>
                </tr>

                <tr>
                  <td class="text-right">CEP</td>
                  <td class="text-left">{{ $provider->zip_code_mask }}</td>
                </tr>

                <tr>
                  <td class="text-right">Região</td>
                  <td class="text-left">{{ $provider->city->region->description }} ({{ $provider->city->region->code }})</td>
                </tr>

                <tr>
                  <td class="text-right">Telefone</td>
                  <td class="text-left">{{ $provider->phone_mask }}</td>
                </tr>

                <tr>
                  <td class="text-right">Celular</td>
                  <td class="text-left">{{ $provider->mobile_mask }}</td>
                </tr>

                <tr>
                  <td class="text-right">e-mail</td>
                  <td class="text-left">{{ $provider->email }}</td>
                </tr>

                <tr>
                  <td class="text-right">Observações</td>
                  <td class="text-left">{{ $provider->comments }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
    	@include('revisionable.logs_register')
    </div>
  </div>
    
@endsection
  