@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Planos</h1>
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
        <div class="card-header row">
            <div class="col-sm-10">
                <form method="POST" action="{{route('plans.search')}}" class="form form-inline">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input type="text" name="filter" class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info btn-flat">Pesquisar</button>
                            </span>
                    </div>
                    
                </form>
            </div>
            
            <div class="card-tools col-sm-2 text-right">
                <a href="{{ route('plans.create') }}" class="badge badge-success"><i class="fa fa-plus"></i>  Novo Plano</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="150">Ações</th>
                </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>
                            {{$plan->name}}
                        </td>
                        <td>
                            {{number_format($plan->price,2,',','.')}}
                        </td>
                        <td style="width: 10px">
                            <a href="{{ route('plans.edit',$plan->url) }}" class="badge badge-info">Editar</a>
                            <a href="{{ route('plans.show',$plan->url) }}" class="badge badge-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@endsection

