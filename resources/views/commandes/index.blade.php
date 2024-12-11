@extends('master')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Liste des Commandes</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
            <a href="{{ route('commandes.create') }}" class="btn btn-primary btn-rounded">
                <i class="fa fa-plus"></i> Créer une Commande
            </a>
        </div>
    </div>

    <div class="white-box">
        <h3 class="box-title">Commandes</h3>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table id="commandesTable" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Fournisseur</th>
                        <th>Date de Commande</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commandes as $commande)
                    <tr class="text-center">
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->fournisseur->nom }}</td>
                        <td>{{ $commande->date_commande }}</td>
                        <td>{{ $commande->status }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('commandes.show', $commande) }}" class="btn btn-info" title="Voir">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('commandes.edit', $commande) }}" class="btn btn-warning" title="Modifier">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('commandes.destroy', $commande) }}" method="POST" style="display:inline;">
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
            {{ $commandes->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
