@extends('adminlte::page')

@section('title', "Editar Plano {$plan->name}")

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Plano {{$plan->name}}</h1>
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
        <div class="card-body">
            <form action="{{route('plans.update',$plan->url)}}" method="post" class="form">
                @csrf
                @method('PUT')
               @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
@endsection