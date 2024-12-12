@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title text-primary">Créer une Commande</h4> <!-- Couleur bleue pour le titre principal -->
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('commandes.index') }}" class="btn btn-secondary btn-rounded">
                <i class="fa fa-arrow-left"></i> Retour à la liste des Commandes
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title text-success">Informations sur la Commande</h3> <!-- Couleur verte pour la section -->

        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('commandes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="fournisseur_id" class="text-info">Fournisseur</label> <!-- Couleur bleue pour le label -->
                <select name="fournisseur_id" id="fournisseur_id" class="form-control" required>
                    <option value="">Choisissez un fournisseur</option>
                    @foreach($fournisseurs as $fournisseur)
                        <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date_commande" class="text-warning">Date de Commande</label> <!-- Couleur jaune pour le label -->
                <input type="date" name="date_commande" id="date_commande" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status" class="text-danger">Statut</label> <!-- Couleur rouge pour le label -->
                <input type="text" name="status" id="status" class="form-control" required>
            </div>

            <!-- Lignes de Commande -->
            <h4 class="text-primary">Lignes de Commande</h4> <!-- Couleur bleue pour cette section -->
            <div id="lignes-container">
                <div class="ligne-commande">
                    <div class="form-group">
                        <label for="article_id" class="text-info">Article</label> <!-- Couleur bleue pour le label -->
                        <select name="lignes[0][article_id]" class="form-control" required>
                            <option value="">Choisissez un article</option>
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}">{{ $article->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="quantite" class="text-success">Quantité</label> <!-- Couleur verte pour le label -->
                        <input type="number" name="lignes[0][quantite]" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="prix_unitaire" class="text-warning">Prix Unitaire</label> <!-- Couleur jaune pour le label -->
                        <input type="number" step="0.01" name="lignes[0][prix_unitaire]" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="button" id="add-line" class="btn btn-info btn-rounded">
                Ajouter une ligne
            </button>

            <button type="submit" class="btn btn-primary btn-rounded">
                <i class="fa fa-check"></i> Créer la Commande
            </button>
        </form>
    </div>
</div>

<script>
    document.getElementById('add-line').addEventListener('click', function() {
        const container = document.getElementById('lignes-container');
        const ligneCount = container.children.length;
        const newLine = `
            <div class="ligne-commande">
                <div class="form-group">
                    <label for="article_id">Article</label>
                    <select name="lignes[${ligneCount}][article_id]" class="form-control" required>
                        <option value="">Choisissez un article</option>
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="lignes[${ligneCount}][quantite]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="prix_unitaire">Prix Unitaire</label>
                    <input type="number" step="0.01" name="lignes[${ligneCount}][prix_unitaire]" class="form-control" required>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', newLine);
    });
</script>
@endsection
