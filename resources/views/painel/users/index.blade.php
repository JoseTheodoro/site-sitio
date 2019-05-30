@extends('painel.layout')

@section('name', 'Gerenciamento de Usuários')

@section('content')

<p>
    <a class="btn btn-primary" href="{{route('user.create')}}"><span data-feather="user-plus"></span> Novo Usuário</a>
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

    <thead>
        <tr>
            <th class="text-right">#</th>
            <th>Name</th>
            <th>Email</th>
            <th width="100"></th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="text-right">{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="#" class="btn btn-default"> <span class="fa fa-edit" data-feather="edit"></span> </a> 
                <a href="{{route('delete', $user->id)}}" class="btn btn-danger"> <span class="fa fa-trash" data-feather="delete"></span> </a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>

@endsection