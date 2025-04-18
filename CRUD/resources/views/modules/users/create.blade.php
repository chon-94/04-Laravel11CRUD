@extends('layouts/main')

    <div class="container mt-4">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST"> 
                            @csrf
                            @method('POST')
                            <label for="name">Escribe el nombre</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            <button class="btn btn-primary mt-3">AGREGAR</button>
                            <a href="{{ route('index') }}" class="btn btn-secondary mt-3"> cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
