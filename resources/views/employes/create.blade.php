@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('employe.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter le nom de l'employé">
            </div>
            <div class="form-group">
                <label for="prénom">Prénom</label>
                <input type="text" class="form-control" id="prénom" name="prénom"  placeholder="Enter le prénom de l'employé">
            </div>
            <div class="form-group">
                <label for="date_naiss">Date de naissance</label>
                <input type="date" class="form-control" id="date_naiss"  name="date_naissance" placeholder=" date de naissance de l'employé">
            </div>
            <div class="form-group">
                <label for="CIN">CIN</label>
                <input type="text" class="form-control" id="CIN" name="CIN" placeholder=" CIN de l'employé">
            </div>
            <div class="form-group">
                <label for="tel">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="tel" name="tel"  placeholder=" tel de l'employé">
            </div>
            <div class="form-group">
                <label for="contat">type de contrat</label>
                <input type="text" class="form-control" id="contrat" name="type_contrat" placeholder=" type de contrat">
            </div>
            <div class="form-group">
                <label for="salaire">salaire</label>
                <input type="text" class="form-control" id="salaire" name="salaire"  placeholder="salaire">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
