@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Modifier un Fournisseur</h4>
        </div>
    </div>

    <div class="white-box">
        <form action="{{ route('fournisseurs.update', $fournisseur) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ $fournisseur->nom }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $fournisseur->email }}" required>
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $fournisseur->telephone }}" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $fournisseur->adresse }}" required>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-warning btn-rounded">Sauvegarder les Modifications</button>
            </div>
        </form>
    </div>
</div>
@endsection
