@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Créer un Fournisseur</h4>
        </div>
    </div>

    <div class="white-box">
        <form action="{{ route('fournisseurs.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du Fournisseur" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email du Fournisseur" required>
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Numéro de Téléphone" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse du Fournisseur" required>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-rounded">Créer Fournisseur</button>
            </div>
        </form>
    </div>
</div>
@endsection
