@extends('master')

@section('content')
    <h1>Détails de la Commande #{{ $commande->id }}</h1>

    <ul>
        <li><strong>Fournisseur:</strong> {{ $commande->fournisseur->nom }}</li>
        <li><strong>Date de Commande:</strong> {{ $commande->date_commande }}</li>
        <li><strong>Status:</strong> {{ $commande->status }}</li>
    </ul>

    <h3>Lignes de Commande</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commande->lignes as $ligne)
                <tr>
                    <td>{{ $ligne->article->nom }}</td>
                    <td>{{ $ligne->quantite }}</td>
                    <td>{{ $ligne->prix }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Retour à la liste</a>
@endsection
