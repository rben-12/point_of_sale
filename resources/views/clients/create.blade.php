@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{route('clients.store')}}" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <h4 class="card-title">Cliente</h4>
                <div class="form-group">
                    <label for="">Numero de cliente</label>
                    <!--auto-increment-->
                    <input type="text" name="n_client" class="form-control" required> 
                </div>
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>
                <!--checkbox-->
                <div class="form-group">
                    <label for="">Dependencia</label>
                    <input type="text" name="dependence" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <!--end-checkbox-->
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" maxlength="10">
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