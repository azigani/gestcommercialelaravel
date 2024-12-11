@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Détails de la Catégorie</h4>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Informations sur la Catégorie</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $categorie->id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ $categorie->nom }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $categorie->description }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Retour
            </a>
        </div>
    </div>
</div>
@endsection
