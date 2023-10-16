@extends('admin.master')

@section('conteudo')
    <div class="container mb-2">
        <div class="row mb-3">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{!! Session::get('success') !!}</p>

                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    <p>{!! Session::get('error') !!}</p>

                </div>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding: 5px 10px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.home')}}">Início</a>
                    </li>
                    <span style="padding: 0px 10px;">/</span>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.calendar')}}">Sistema Administrativo</a>
                    </li>
                    <span style="padding: 0px 10px;">/</span>
                    <li class="breadcrumb-item">
                        <a href="{{route('EscalaPlantonistas.escala.cadastro-escala')}}">Cadastrar Escala</a>
                    </li>
                    <span style="padding: 0px 10px;">/</span>
                    <li class="breadcrumb-item active" aria-current="page"> Visualizar Histórico de Escala </li>
                </ol>
            </nav>
        </div>
    </div>

        <div class="container">
            <div class="row mb-3">
                @can('can-edit-escala')
                <div class="col-9 text-right" style="top: 10px;">
                    {{--                    {{route('escala.trocar-escala.store')}}--}}
                    <a class="btn btn-primary-modificado" href="{{route('EscalaPlantonistas.escala.editar-escala')}}">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Editar ou Trocar Escala</span>
                    </a>
                </div>
                @endcan

                @can('can-access-gerenciar')
                <div class="col-2">
                    @include('EscalaPlantonistas.menu.menu')
                </div>
                @endcan
            </div>
        </div>

    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2> Visualizar Histórico de Escala </h2>
            </div>
        </div>
    </div>
        @can('can-access-escala')
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr></tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        Nome:
                    </td>

                    <td>
                        {{$escala->idmedico}}
                    </td>
                <tr>
                <tr>
                    <td>
                        Especialidade :
                    </td>

                    <td>
                        {{$escala->idespecialidade}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Serviço:
                    </td>

                    <td>
                        {{$escala->idservico}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Período:
                    </td>

                    <td>
                        {{$escala->idperiodo}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Data Inicio:
                    </td>

                    <td>
                        {{\Carbon\Carbon::parse($escala->data_fim)->format('d/m/Y')}}
                    </td>
                </tr>

                <tr>
                    <td>
                        Data Fim:
                    </td>

                    <td>
                        {{\Carbon\Carbon::parse($escala->data_inicio)->format('d/m/Y')}}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
        @endcan
@endsection
