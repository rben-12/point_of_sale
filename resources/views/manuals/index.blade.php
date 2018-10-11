@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">Manuales</h1>
</div>
<div class="col-md-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Año</th>
                <th>producto</th>
                <th>file</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manuals as $manual)
            <tr>
                <td class="py-1">{{$manual->model}}</td>
                <td class="py-1">{{$manual->year}}</td>
                <td class="py-1">{{$manual->product->product}}</td>
                <td class="py-1">{{$manual->file}}</td>
                <td class="py-1 text-center">
                    <a href="{{route('manuals.edit', $manual)}}" class="btn btn-sm btn-dark"><i class="fas fa-sync"></i></a>
                    <a href="{{route('manuals.destroy', $manual)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-12">
    {{$manuals->links()}}
</div>
@endsection