@extends('layouts/main')

    <div class="container mt-4">
        <h2>Mstrar la Informacion {{$item -> name}}</h2>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
<table>
    <thead>
        <tr>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $item -> id}}</td>
            <td>{{ $item -> name}}</td>

        </tr>
    </tbody>
</table>
<a href="{{route('index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
