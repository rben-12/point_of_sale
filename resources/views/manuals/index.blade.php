@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <h1 class="card-title">Manuales</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
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
                            <td class="py-1">
                                <a href="{{asset($manual->file)}}" target="_blank">
                                @if (pathinfo($manual->file, PATHINFO_EXTENSION) == 'pdf')
                                    <img src="{{ asset('img/iconPdf.ico') }}" alt="">
                                    @elseif(pathinfo($manual->file, PATHINFO_EXTENSION) == 'docx' || pathinfo($manual->file, PATHINFO_EXTENSION)=='doc')
                                    <img src="{{ asset('img/iconFileWord.ico') }}" alt="">
                                    @elseif(pathinfo($manual->file, PATHINFO_EXTENSION) == 'xlsx')
                                    <img src="{{ asset('img/iconFileExcel.png') }}" alt="">
                                    @elseif(pathinfo($manual->file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($manual->file, PATHINFO_EXTENSION) == 'png' || pathinfo($manual->file, PATHINFO_EXTENSION) == 'jpeg')
                                    <img src="{{ asset('img/iconFile.png') }}" alt="">
                                @endif
                                </a>
                            </td>
                            <td class="py-1 text-center">
                                <a href="{{route('manuals.edit', $manual)}}" class="btn btn-sm btn-dark"><i class="fas fa-sync"></i></a>
                                <a href="{{route('manuals.destroy', $manual)}}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$manuals->links()}}
        </div>
    </div>
</div>
@endsection