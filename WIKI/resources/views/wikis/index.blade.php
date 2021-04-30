@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9  ">
                            <span class="text-uppercase text-info fw-bold me-2"> wiki consultas</span> <span class="badge bg-primary rounded-pill">{{count($wikis)}}</span>
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


                    <ol class="list-group list-group-numbered">

                        @foreach( $wikis as $wiki)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"> {{$wiki->user->name}} - {{ $wiki->titulo}} - <span class="badge bg-primary rounded-pill">

                                        @if($wiki->estado == 1)
                                        Pendiente
                                        @else

                                        Completado

                                        @endif


                                    </span></div>
                                {{ $wiki->motivo}}
                            </div>


                            @if(Auth::user()->role->name == 'Administrador' ||
                            Auth::user()->role->name == 'Editor' ||
                            Auth::user()->id == $wiki->user_id )

                            <div class="btn-group" role="group" aria-label="Basic outlined example">

                                <form action="{{route('wikis.destroy',$wiki->id)}}" method="POST">
                                    <a href="/wikis/{{$wiki->id}}/edit" class="btn btn-outline-primary rounded-pill">Editar</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger rounded-pill">Eliminar</button>

                                </form>

                            </div>
                            @endif
                        </li>

                        @endforeach


                    </ol>



                </div>
            </div>
        </div>
    </div>
</div>


@include('wikis.create')

@endsection