@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">Productos</h1>
</div>
<div class="col-md-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Medida</th>
                <th class="text-right">Precio</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="py-1">{{$product->product}}</td>
                <td class="py-1">{{$product->category->category}}</td>
                <td class="py-1">{{$product->model}}</td>
                <td class="py-1">{{$product->serie}}</td>
                <td class="py-1">{{$product->measure}}</td>
                <td class="py-1 text-right">{{number_format($product->price, 2)}}</td>
                <td class="py-1 text-center">
                    <a href="{{route('products.edit', $product)}}" class="btn btn-sm btn-dark"><i class="fas fa-sync"></i></a>
                    @if($product->trashed())
                    <a href="{{route('products.destroy', $product)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                    @else
                    <a href="{{route('products.destroy', $product)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-times"></i></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-12">
    {{$products->links()}}
</div>
@endsection