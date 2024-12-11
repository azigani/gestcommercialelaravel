@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Modifier une catégorie</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-rounded">
                <i class="fa fa-list"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Modifier les informations de la catégorie</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $categorie->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom de la catégorie</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $categorie->nom) }}" placeholder="Entrez le nom de la catégorie" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Entrez la description de la catégorie">{{ old('description', $categorie->description) }}</textarea>
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
