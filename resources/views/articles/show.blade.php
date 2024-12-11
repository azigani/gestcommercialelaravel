@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="page-title">Détails de l'article</h4>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 text-right">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary btn-rounded">
                <i class="fa fa-arrow-left"></i> Retour
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Informations</h3>
        <p><strong>Nom :</strong> {{ $article->nom }}</p>
        <p><strong>Description :</strong> {{ $article->description }}</p>
        <p><strong>Catégorie :</strong> {{ $article->categorie->nom }}</p>
    </div>
</div>
@endsection
