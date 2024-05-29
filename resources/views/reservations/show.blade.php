@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservation Details</h1>
    <div class="form-group">
        <label for="id_internaute">Internaute ID:</label>
        <input type="text" class="form-control" id="id_internaute" name="id_internaute" value="{{ $reservation->id_internaute }}" disabled>
    </div>
    <div class="form-group">
        <label for="id_hotel">Hotel ID:</label>
        <input type="text" class="form-control" id="id_hotel" name="id_hotel" value="{{ $reservation->id_hotel }}" disabled>
    </div>
    <div class="form-group">
        <label for="date_debut_sejour">Start Date:</label>
        <input type="date" class="form-control" id="date_debut_sejour" name="date_debut_sejour" value="{{ $reservation->date_debut_sejour }}" disabled>
    </div>
    <div class="form-group">
        <label for="date_fin_sejour">End Date:</label>
        <input type="date" class="form-control" id="date_fin_sejour" name="date_fin_sejour" value="{{ $reservation->date_fin_sejour }}" disabled>
    </div>
    <div
