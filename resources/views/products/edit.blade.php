@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">Producto</h1>
</div>
<div class="col-md-12">
    <form action="{{route('products.update', $product)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">Producto</label>
            <input type="text" name="product" class="form-control" value="{{$product->product}}">
        </div>
        <div class="form-group">
            <label for="">Categoría</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{($category == $product->category)?'selected':''}}>{{$category->category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="model" class="form-control" value="{{$product->model}}">
        </div>
        <div class="form-group">
            <label for="">Serie</label>
            <input type="text" name="serie" class="form-control" value="{{$product->serie}}">
        </div>
        <div class="form-group">
            <label for="">Medida</label>
            <input type="text" name="measure" class="form-control" value="{{$product->measure}}">
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="text" name="price" class="form-control" value="{{$product->price}}">
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
        $("select[name='category_id']").select2()
    }
</script>
@endsection