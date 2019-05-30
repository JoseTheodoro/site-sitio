@extends('painel.layout')

@section('name', 'Gerenciamento de Eventos')

@section('content')


<p>
        <a class="btn btn-primary" href="{{route('eventos.create')}}"><span data-feather="folder-plus"></span> Novo Evento</a>
</p>
<div class="table-responsive">
<table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Data</th>
                <th></th>
                <th width="50"></th>
                <th width="50"></th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($eventos as $evento)
            <tr>
                <td><img src="/uploads/{{$evento->capa}}" alt="" width="100"></td>
                <td>{{$evento->name}}</td>
                <td>{{$evento->data->format('d/m/Y')}}</td>
                <td> <a href={{route('eventos.reserva', $evento->id)}}> <span data-feather="check-square"></span> Reservas ({{$evento->confirm_count}}) </a> </td>
                <td> <a class="btn" href={{route('eventos.edit', $evento->id)}}> <span class="fa fa-edit" data-feather="edit"></span></a> </td>
                <td> <a class="btn btn-danger" href={{route('eventos.delete', $evento->id)}}> <span class="fa fa-trash" data-feather="delete"></span> </a> </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
    </div>


@endsection