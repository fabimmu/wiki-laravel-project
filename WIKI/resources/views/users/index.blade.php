@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9  ">
                            <span class="text-uppercase text-info fw-bold me-2"> LISTA DE USAURIOS</span> <span class="badge bg-primary rounded-pill">{{count($users)}}</span>
                        </div>
                        <div class="col-3 d-grid gap-2  d-block ">
                            <!-- Button trigger modal -->

                            <button type="button" class="btn btn-primary btn-sm btn-block text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                            </button>


                        </div>
                    </div>
                </div>
                <div class="card-body">

                <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Role</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
   @foreach($users as $user)
   <tr>
      <th scope="row">  {{ $user->id}}</th>
      <td>{{ $user->role->name}}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic outlined example">

<form action="{{route('users.destroy',$user->id)}}" method="POST">
    <a href="/users/{{$user->id}}/edit" class="btn btn-outline-primary rounded-pill">Editar</a>

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger rounded-pill">Eliminar</button>

</form>

</div>
      
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>


@include('users.create')

@endsection