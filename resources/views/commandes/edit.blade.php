@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Modifier la Commande</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('commandes.index') }}" class="btn btn-secondary btn-rounded">
                <i class="fa fa-arrow-left"></i> Retour à la liste des Commandes
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Modifier les Informations de la Commande</h3>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="fournisseur_id">Fournisseur</label>
                <select name="fournisseur_id" id="fournisseur_id" class="form-control" required>
                    <option value="">Choisissez un fournisseur</option>
                    @foreach($fournisseurs as $fournisseur)
                        <option value="{{ $fournisseur->id }}" {{ $fournisseur->id == $commande->fournisseur_id ? 'selected' : '' }}>
                            {{ $fournisseur->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date_commande">Date de Commande</label>
                <input type="date" name="date_commande" id="date_commande" class="form-control" value="{{ $commande->date_commande }}" required>
            </div>

            <div class="form-group">
                <label for="status">Statut</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $commande->status }}" required>
            </div>

            <button type="submit" class="btn btn-warning btn-rounded">
                <i class="fa fa-save"></i> Sauvegarder les Modifications
            </button>
        </form>
    </div>
</div>
@endsection
