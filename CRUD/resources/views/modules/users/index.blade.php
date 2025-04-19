@extends('layouts/main')

@section('contenido')
<div class="container mt-4">
    <h2>crud contenido contenerdor </h2> 
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary">
                        <i class="fa-sharp fa-solid fa-plus"> 
                            Agregar 
                        </i> 
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>            
@endsection