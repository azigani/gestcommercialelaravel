<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Fournisseur;
use App\Models\Article;
use App\Models\LigneCommande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
  // Affiche la liste des commandes
  public function index()
  {
      $commandes = Commande::with('fournisseur')->paginate(10); // Chargement avec fournisseur
      return view('commandes.index', compact('commandes'));
  }

  // Affiche le formulaire de création
  public function create()
  {
      $fournisseurs = Fournisseur::all(); // Récupérer tous les fournisseurs
    $articles = Article::all();
      return view('commandes.create', compact('fournisseurs','articles'));
  }

  // Enregistre une nouvelle commande
  public function store(Request $request)
  {
      $request->validate([
         'fournisseur_id' => 'required|exists:fournisseurs,id',
            'date_commande' => 'required|date',
            'status' => 'required|string',
            'lignes' => 'required|array',
            'lignes.*.article_id' => 'required|exists:articles,id',
            'lignes.*.quantite' => 'required|numeric|min:1',
            'lignes.*.prix_unitaire' => 'required|numeric|min:0',
      ]);

      // Créer une nouvelle commande
       // Création de la commande
       $commande = new Commande();
       $commande->fournisseur_id = $request->fournisseur_id;
       $commande->date_commande = $request->date_commande;
       $commande->status = $request->status;
       $commande->save();

       // Enregistrer les lignes de commande
       foreach ($request->lignes as $ligne) {
           $ligneCommande = new LigneCommande();
           $ligneCommande->commande_id = $commande->id;
           $ligneCommande->article_id = $ligne['article_id'];
           $ligneCommande->quantite = $ligne['quantite'];
           $ligneCommande->prix_unitaire = $ligne['prix_unitaire'];
           $ligneCommande->save();
       }

       // Retourner un message de succès
       return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès.');

  }

  // Affiche les détails d'une commande
  public function show(Commande $commande)
  {
      $commande->load('fournisseur', 'lignes'); // Charger fournisseur et lignes de commande
      return view('commandes.show', compact('commande'));
  }

  // Affiche le formulaire de modification
  public function edit(Commande $commande)
  {
      $fournisseurs = Fournisseur::all(); // Récupérer tous les fournisseurs
      return view('commandes.edit', compact('commande', 'fournisseurs'));
  }

  // Met à jour les informations de la commande
  public function update(Request $request, Commande $commande)
  {
      $request->validate([
          'fournisseur_id' => 'required|exists:fournisseurs,id',
          'date_commande' => 'required|date',
          'status' => 'required|string|max:255',
      ]);

      // Mettre à jour la commande
      $commande->update($request->all());

      return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès.');
  }

  // Supprime la commande
  public function destroy(Commande $commande)
  {
      $commande->delete();

      return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès.');
  }
}
