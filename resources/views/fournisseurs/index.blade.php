@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Liste des Fournisseurs</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('fournisseurs.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Créer un Fournisseur
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Fournisseurs</h3>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table id="fournisseursTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fournisseurs as $fournisseur)
                    <tr class="text-center">
                        <td>{{ $fournisseur->id }}</td>
                        <td>{{ $fournisseur->nom }}</td>
                        <td>{{ $fournisseur->email }}</td>
                        <td>{{ $fournisseur->telephone }}</td>
                        <td>{{ $fournisseur->adresse }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('fournisseurs.show', $fournisseur) }}" class="btn btn-info" title="Voir">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('fournisseurs.edit', $fournisseur) }}" class="btn btn-warning" title="Modifier">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('fournisseurs.destroy', $fournisseur) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')" title="Supprimer">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $fournisseurs->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
