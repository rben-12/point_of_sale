@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <h1 class="card-title">Partes</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product</th>
                            <th>Categoria</th>
                            <th>Codigo</th>
                            <th>Caballaje</th>
                            <th>stock</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parts as $part)
                        <tr>
                            <td class="py-1">{{$part->product->product}}</td>
                            <td class="py-1">{{$part->category->category}}</td>
                            <td class="py-1">{{$part->codigo}}</td>
                            <td class="py-1">{{$part->caballaje}}</td>
                            <td class="py-1">{{$part->stock}}</td>
                            <td class="py-1 text-center">
                                <a href="{{route('parts.edit', $part)}}" class="btn btn-sm btn-dark"><i class="fas fa-sync"></i></a>
                                @if($part->trashed())
                                <a href="{{route('parts.destroy', $part)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                                @else
                                <a href="{{route('parts.destroy', $part)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-times"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$parts->links()}}
        </div>
    </div>
</div>
@endsection