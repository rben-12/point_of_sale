@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">Manual</h1>
</div>
<div class="col-md-12">
    <form action="{{route('manuals.update', $manual)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="model" class="form-control" value="{{$manual->model}}">
        </div>
        <div class="form-group">
            <label for="">año</label>
            <input type="text" name="year" class="form-control" value="{{$manual->year}}">
        </div>
        <div class="form-group">
            <label for="">Producto</label>
            <select name="product_id" class="form-control">
                @foreach($products as $product)
                <option value="{{$product->id}}" {{($product == $manual->product)?'selected':''}}>{{$product->product}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">archivo</label>
            <input type="text" name="file" class="form-control" value="{{$manual->file}}">
        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-dark">Cancelar</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script>
    select2()
    function select2(){
        $("select[name='product_id']").select2()
    }
</script>
@endsection