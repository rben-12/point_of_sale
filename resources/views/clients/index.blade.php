@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <h1 class="card-title">Clientes</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Numero de cliente</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Dependencia</th>
                            <th>Corrreo</th>
                            <th>Telefono</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client) 
                        <tr>
                            <td class="py-1">{{$client->n_client}}</td>
                            <td class="py-1">{{$client->name}}</td>
                            <td class="py-1">{{$client->lastname}}</td>
                            <td class="py-1">{{$client->dependence}}</td>
                            <td class="py-1">{{$client->email}}</td>
                            <td class="py-1">{{$client->phone}}</td>
                            <td class="py-1 text-center">
                                <a href="{{route('clients.edit', $client)}}" class="btn btn-sm btn-dark"><i class="fas fa-sync"></i></a>
                                <a href="{{route('clients.destroy', $client)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$clients->links()}}
        </div>
    </div>
</div>
@endsection