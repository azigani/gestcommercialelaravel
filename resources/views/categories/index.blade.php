@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Liste des Catégories</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Ajouter une Catégorie
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Catégories</h3>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table id="categoriesTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $categorie)
                    <tr class="text-center">
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('categories.edit', $categorie) }}" class="btn btn-warning" title="Modifier">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('categories.destroy', $categorie) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')" title="Supprimer">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('categories.show', $categorie) }}" class="btn btn-info" title="Voir">
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
            {{ $categories->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
