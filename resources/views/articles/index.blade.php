@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Liste des articles</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('articles.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Ajouter un article
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Articles</h3>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table id="articlesTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nom</th>
                        <th>code</th>
                        <th>quantite</th>
                        <th>quantite min</th>
                        <th>catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr class="text-center">
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->nom }}</td>
                        <td>{{ $article->code }}</td>
                        <td>{{ $article->quantite }}</td>
                        <td>{{ $article->quantite_min }}</td>
                        <td>{{ $article->categorie->nom ?? 'Non défini' }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning" title="Modifier">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')" title="Supprimer">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('articles.show', $article) }}" class="btn btn-info" title="Voir">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $articles->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
