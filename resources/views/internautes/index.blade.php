@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Internautes</h1>
    <a href="{{ route('internautes.create') }}" class="btn btn-primary mb-3">Add Internaute</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>CIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($internautes as $internaute)
                <tr>
                    <td>{{ $internaute->id }}</td>
                    <td>{{ $internaute->nom }}</td>
                    <td>{{ $internaute->prenom }}</td>
                    <td>{{ $internaute->adresse }}</td>
                    <td>{{ $internaute->date_naissance }}</td>
                    <td>{{ $internaute->cin }}</td>
                    <td>
                        <a href="{{ route('internautes.show', $internaute) }}" class="btn btn-info">View</a>
                        <a href="{{ route('internautes.edit', $internaute) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('internautes.destroy', $internaute) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
