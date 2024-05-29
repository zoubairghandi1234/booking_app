@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hotels</h1>
    <a href="{{ route('hotels.create') }}" class="btn btn-primary mb-3">Add Hotel</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Adresse</th>
                <th>Prix Unitaire</th>
                <th>Type Chambre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->titre }}</td>
                    <td>{{ $hotel->adresse }}</td>
                    <td>{{ $hotel->prix_unitaire }}</td>
                    <td>{{ $hotel->type_chambre }}</td>
                    <td>
                        <a href="{{ route('hotels.show', $hotel) }}" class="btn btn-info">View</a>
                        <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" style="display:inline;">
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
