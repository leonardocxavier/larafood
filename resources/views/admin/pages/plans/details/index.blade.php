@extends('adminlte::page')

@section('title', "Detalhes do plano {{$plan->name}}")

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detalhes Do Plano {{$plan->name}}</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">DashBoard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.show',$plan->url) }}">{$plan->name}</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('details.plan.index',$plan->url) }}" class="active">Detalhes</a></li>
            
            </ol>
        </div>
    </div>
</div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="150">Ações</th>
                </thead> 
            <tbody>
                @foreach ($details as $detail)
                    <tr>
                        <td>
                            {{$detail->name}}
                        </td>
                       
                        <td style="width: 10px">
                            <a href="{{ route('details.plan.index',$plan->url) }}" class="badge badge-primary">Detalhes</a>
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
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@endsection
