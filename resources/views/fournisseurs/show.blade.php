@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Détails du Fournisseur</h4>
        </div>
    </div>

    <div class="white-box">
        <table class="table">
            <tr>
                <th>Nom</th>
                <td>{{ $fournisseur->nom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $fournisseur->email }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $fournisseur->telephone }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ $fournisseur->adresse }}</td>
            </tr>
        </table>

        <a href="{{ route('fournisseurs.index') }}" class="btn btn-secondary btn-rounded">Retour à la liste</a>
    </div>
</div>
@endsection
