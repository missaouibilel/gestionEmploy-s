@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employe.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employe.update',$employe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{$employe->nom}}" placeholder="Enter le nom de l'employé">
        </div>
        <div class="form-group">
            <label for="prénom">Prénom</label>
            <input type="text" class="form-control" id="prénom" name="prénom" value="{{$employe->prénom}}"  placeholder="Enter le prénom de l'employé">
        </div>
        <div class="form-group">
            <label for="date_naiss">Date de naissance</label>
            <input type="date" class="form-control" id="date_naiss"  name="date_naissance" value="{{$employe->date_naissance}}" placeholder=" date de naissance de l'employé">
        </div>
        <div class="form-group">
            <label for="CIN">CIN</label>
            <input type="text" class="form-control" id="CIN" name="CIN" value="{{$employe->CIN}}" placeholder=" CIN de l'employé">
        </div>
        <div class="form-group">
            <label for="tel">Numéro de téléphone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="{{$employe->tel}}"  placeholder=" tel de l'employé">
        </div>
        <div class="form-group">
            <label for="contat">type de contrat</label>
            <input type="text" class="form-control" id="contrat" name="type_contrat" value="{{$employe->type_contrat}}" placeholder=" type de contrat">
        </div>
        <div class="form-group">
            <label for="salaire">salaire</label>
            <input type="text" class="form-control" id="salaire" name="salaire" value="{{$employe->salaire}}"  placeholder="salaire">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
