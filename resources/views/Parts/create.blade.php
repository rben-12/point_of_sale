@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{route('parts.store')}}" method="post">
            <div class="card-body">
                <h4 class="card-title">Parts</h4>
                {{csrf_field()}}
                
                </div>
                <div class="form-group">
                    <label for="">Codigo</label>
                    <input type="text" name="codigo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Caballaje</label>
                    <input type="text" name="caballaje" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="text" name="stock" class="form-control">
                </div>
                <div class="card-footer">
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
    function select2() {
        $("select[name='category_id']").select2()
    }
</script>
@endsection