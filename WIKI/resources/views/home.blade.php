@extends('layouts.app')

@section('content')


<div class="container ">
  <div class="row justify-content-center ">
    <h6 class="text-uppercase text-info fw-bold">Ultimos 3 posts</h6>
    @foreach($wikis as $wiki)
    <div class="col-md-4 p-2 ">
      <div class="card border-0 shadow-lg p-4" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1496262967815-132206202600?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=795&q=80" class="card-img-top mx-auto" style='width:200px;height:200px' alt="...">
        <div class="card-body">
          <h4 class="card-title" style="text-align:center">{{$wiki->titulo}}</h4>
          <p class="card-text">{{$wiki->motivo}}</p>
          <small>{{$wiki->user->name}}</small>

        </div>
      </div>
    </div>


    @endforeach
  </div>
</div>



@endsection