@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Internaute Details</h1>
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ $internaute->nom }}" disabled>
    </div>
    <div class="form-group">
        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $internaute->prenom }}" disabled>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $internaute->adresse }}" disabled>
    </div>
    <div class="form-group">
        <label for="date_naissance">Date de Naissance:</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $internaute->date_naissance }}" disabled>
    </div>
    <div class="form-group">
        <label for="cin">CIN:</label>
        <input type="text" class="form-control" id="cin" name="cin" value="{{ $internaute->cin }}" disabled>
    </div>
    <a href="{{ route('internautes.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
