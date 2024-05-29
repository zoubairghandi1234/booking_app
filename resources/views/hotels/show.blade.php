@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hotel Details</h1>
    <div class="form-group">
        <label for="titre">Titre:</label>
        <input type="text" class="form-control" id="titre" name="titre" value="{{ $hotel->titre }}" disabled>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $hotel->adresse }}" disabled>
    </div>
    <div class="form-group">
        <label for="prix_unitaire">Prix Unitaire:</label>
        <input type="number" class="form-control" id="prix_unitaire" name="prix_unitaire" value="{{ $hotel->prix_unitaire }}" disabled>
    </div>
    <div class="form-group">
        <label for="type_chambre">Type Chambre:</label>
        <input type="text" class="form-control" id="type_chambre" name="type_chambre" value="{{ $hotel->type_chambre }}" disabled>
    </div>
    <a href="{{ route('hotels.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
