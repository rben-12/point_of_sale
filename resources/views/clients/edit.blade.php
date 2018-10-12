@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{route('clients.update', $client)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
            <div class="card-body">
                <h4 class="card-title">Cliente</h4>
                <div class="form-group">
                    <label for="">Numero de cliente</label>
                    <!--auto-increment-->
                    <input type="text" name="n_client" class="form-control" value="{{$client->n_client}}"> 
                </div>
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="name" class="form-control" value="{{$client->name}}">
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="lastname" class="form-control" value="{{$client->lastname}}">
                </div>
                <!--checkbox-->
                <div class="form-group">
                    <label for="">Dependencia</label>
                    <input type="text" name="dependence" class="form-control" value="{{$client->dependence}}"> 
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email" name="email" class="form-control" value="{{$client->email}}">
                </div>
                <!--end-checkbox-->
                <div class="form-group">
                    <label for="">Telefono (10 digitos)</label>
                    <input type="tel" name="phone" class="form-control" value="{{$client->phone}}">
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