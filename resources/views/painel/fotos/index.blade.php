@extends('painel.layout')

@section('name', 'Fotos')

@section('content')

<p>
        <a class="btn btn-primary" href="{{route('fotos.create')}}"><span data-feather="image"></span> Nova Foto</a>
</p>
<div class="table-responsive">
<table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th width="50"></th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($fotos as $foto)
            <tr>
                <td><img src="/uploads/{{$foto->name}}" alt="" height="70"></td>
                <td>{{$foto->name}}</td>
                <td> <a class="btn btn-danger" href={{route('fotos.delete', $foto->id)}}> <span class="fa fa-trash" data-feather="delete"></span> </a> </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection