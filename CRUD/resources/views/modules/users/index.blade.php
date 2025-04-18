@extends('layouts/main')

@section('contenido')
<div class="container mt-4">
    <h2>crud contenido contenerdor </h2> 
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary">Agregar</a>
                </div>
            </div>
            
        </div>
@endsection