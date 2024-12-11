@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Ajouter une Catégorie</h4>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Nouvelle Catégorie</h3>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom <span class="text-danger">*</span></label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de la catégorie" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Entrez une description"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Retour
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
