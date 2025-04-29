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
                    <hr>
                    <table class="table table-sm table-bordered text-center">
                       
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($items as $item)
                                

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <form action="" method="post">
                                        <a href="{{route('show', $item->id)}}" class="btn btn-info">
                                            <i class="fa-solid fa-table-list">
                                                Mostrar
                                            </i>
                                        </a>
                                        <a href="{{route('edit', $item->id)}}" class="btn btn-warning">
                                            <i class="fa-regular fa-pen-to-square">
                                                Editar
                                            </i>    
                                        </a>
                                        <button class="btn btn-danger">
                                            <i class="fa-duotone fa-solid fa-trash">
                                                Borrar
                                            </i>
                                        </button>    
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>
                                        no hay datos
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                    <div class=" d-flex justify-content-end">
                        {{$items->links()}}
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</div>            
@endsection