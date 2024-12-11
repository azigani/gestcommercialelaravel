<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Fournisseur;
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
      return view('commandes.create', compact('fournisseurs'));
  }

  // Enregistre une nouvelle commande
  public function store(Request $request)
  {
      $request->validate([
          'fournisseur_id' => 'required|exists:fournisseurs,id', // Validation de la relation fournisseur
          'date_commande' => 'required|date',
          'status' => 'required|string|max:255',
      ]);

      // Créer une nouvelle commande
      Commande::create($request->all());
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
