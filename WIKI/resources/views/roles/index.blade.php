@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9  ">
                            <span class="text-uppercase text-info fw-bold me-2"> LISTA DE USAURIOS</span> <span class="badge bg-primary rounded-pill">{{count($roles)}}</span>
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
      <th scope="col">Name</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
   @foreach($roles as $role)
   <tr>
      <th scope="row">  {{ $role->id}}</th>
      <td>{{ $role->name}}</td>

      <td>
      <div class="btn-group" role="group" aria-label="Basic outlined example">

<form action="{{route('roles.destroy',$role->id)}}" method="POST">
    <a href="/roles/{{$role->id}}/edit" class="btn btn-outline-primary rounded-pill">Editar</a>

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


@include('roles.create')

@endsection