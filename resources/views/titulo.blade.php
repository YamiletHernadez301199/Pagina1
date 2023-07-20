@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row my-4">
            <div class="col">
               
                <table class="table table-dark table-hover" id="tabla">
                    {{-- {{ print_r ($items)}} --}}
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Titulo</th>
                            <th>Texto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->titulo}}</td>
                            <td>{{$item->texto}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection