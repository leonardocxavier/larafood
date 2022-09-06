@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detalhes do Plano {{$plan->name}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">DashBoard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}">Planos</a></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">    
        <ul>
            <li>
                <strong>Nome: </strong> {{$plan->nome}}
            </li>
            <li>
                <strong>URL: </strong> {{$plan->url}}
            </li>
            <li>
                <strong>Preço: </strong> R$ {{number_format($plan->price,2,',','.')}}
            </li>
            <li>
                <strong>Descrição: </strong> {{$plan->description}}
            </li>
        </ul>
        <form action="{{ route('plans.delete',$plan->url) }}" method="POST">
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-danger">Remover Plano {{$plan->name}}</button>
        </form>
    </div>
@endsection