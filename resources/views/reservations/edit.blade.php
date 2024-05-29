@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Reservation</h1>
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_internaute">Internaute ID:</label>
            <input type="text" class="form-control" id="id_internaute" name="id_internaute" value="{{ $reservation->id_internaute }}" required>
        </div>
        <div class="form-group">
            <label for="id_hotel">Hotel ID:</label>
            <input type="text" class="form-control" id="id_hotel" name="id_hotel" value="{{ $reservation->id_hotel }}" required>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Start Date:</label>
            <input type="date" class="form-control" id="date_debut_sejour" name="date_debut_sejour" value="{{ $reservation->date_debut_sejour }}" required>
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">End Date:</label>
            <input type="date" class="form-control" id="date_fin_sejour" name="date_fin_sejour" value="{{ $reservation->date_fin_sejour }}" required>
        </div>
        <div class="form-group">
            <label for="titre">Title:</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $reservation->titre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
