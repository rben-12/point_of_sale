@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{route('manuals.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
                <h4 class="card-title">Manual</h4>
                <div class="form-group">
                    <label for="">Modelo</label>
                    <input type="text" name="model" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Año</label>
                    <input type="number" name="year" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Producto</label>
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->product}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Manual</label>
                    <input type="file" name="_file" class="form-control-file" required>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="reset" class="btn btn-dark">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
    </div>
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