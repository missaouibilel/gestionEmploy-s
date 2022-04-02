@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Géstion des contrats</h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>CIN</th>
            <th>Type de contrat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employes as $employe)
        <tr>
            <td>{{ $employe->nom }}</td>
            <td>{{ $employe->prénom }}</td>
            <td>{{ $employe->CIN }}</td>
            <td>{{ $employe->type_contrat }}</td>
            <td>
                <form action="{{ route('employe.destroy',$employe->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('employe.show',$employe->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('contrat.edit',$employe->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection

