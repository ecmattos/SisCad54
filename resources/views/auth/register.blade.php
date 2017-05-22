@extends('layouts.app')

@section('content')

    <div class="page-header text-primary">
        <div class="row">
            <h4>
                <ul class="breadcrumb">
                    <li>Administração</li>
                    <li>Acessibilidade</li>
                    <li><a href="{!! route('users') !!}">Usuários</a></li>
                    <li>Inclusão</li>
                </ul>
            </h4>
            <hr class="hr-warning" />
        </div>
    </div>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        @include('users.form')

    </form>

@endsection
