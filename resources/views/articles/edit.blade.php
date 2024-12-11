@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Modifier un article</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary btn-rounded">
                <i class="fa fa-list"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Modifier l'article</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom de l'article</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $article->nom) }}" placeholder="Entrez le nom de l'article" required>
            </div>

            <div class="form-group">
                <label for="code">Code de l'article</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $article->code) }}" placeholder="Entrez le code de l'article" required>
            </div>

            <div class="form-group">
                <label for="quantite">Quantité</label>
                <input type="number" class="form-control" id="quantite" name="quantite" value="{{ old('quantite', $article->quantite) }}" placeholder="Entrez la quantité disponible" required>
            </div>

            <div class="form-group">
                <label for="quantite_min">Quantité minimale</label>
                <input type="number" class="form-control" id="quantite_min" name="quantite_min" value="{{ old('quantite_min', $article->quantite_min) }}" placeholder="Entrez la quantité minimale" required>
            </div>

            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select class="form-control" id="categorie_id" name="categorie_id" required>
                    <option value="">-- Sélectionnez une catégorie --</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ old('categorie_id', $article->categorie_id) == $categorie->id ? 'selected' : '' }}>
                            {{ $categorie->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Enregistrer
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="fa fa-eraser"></i> Réinitialiser
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
