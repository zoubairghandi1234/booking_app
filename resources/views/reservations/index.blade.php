@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservations</h1>
    <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3">Add Reservation</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Internaute ID</th>
                <th>Hotel ID</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->id_internaute }}</td>
                    <td>{{ $reservation->id_hotel }}</td>
                    <td>{{ $reservation->date_debut_sejour }}</td>
                    <td>{{ $reservation->date_fin_sejour }}</td>
                    <td>{{ $reservation->titre }}</td>
                    <td>
                        <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-info">View</a>
                        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
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
