@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{route('products.store')}}" method="post">
            <div class="card-body">
                <h4 class="card-title">Producto</h4>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Producto</label>
                    <input type="text" name="product" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Categoría</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Modelo</label>
                    <input type="text" name="model" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Serie</label>
                    <input type="text" name="serie" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Medida</label>
                    <input type="text" name="measure" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="text" name="price" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-dark">Cancelar</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    select2()
    function select2() {
        $("select[name='category_id']").select2()
    }
</script>
@endsection