@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier le contrat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contrat.index') }}"> Retour</a>
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
    <form action="{{ route('contrat.update',$employe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                   <label for="contat">type de contrat</label>
            <input type="text" class="form-control" id="contrat" name="type_contrat" value="{{$employe->type_contrat}}" placeholder=" type de contrat">
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
