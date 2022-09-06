@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome</label>
    <input class="form-control" value="{{$plan->name ?? ''}}" type="text" name="name" placeholder="Nome:">
</div>
<div class="form-group">
    <label>Preço</label>
    <input class="form-control" type="text" value="{{$plan->price ?? ''}}" name="price" placeholder="Preço:">
</div>
<div class="form-group">
    <label>Descrição</label>
    <input class="form-control" type="text" value="{{$plan->description ?? ''}}" name="description" placeholder="Descrição:">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Gravar</button>
</div>
