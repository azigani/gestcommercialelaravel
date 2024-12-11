<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // Affiche la liste des catégories
    public function index()
    {
        $categories = Categorie::paginate(10);
        return view('categories.index', compact('categories'));
    }

    // Affiche le formulaire pour créer une nouvelle catégorie
    public function create()
    {
        return view('categories.create');
    }

    // Enregistre une nouvelle catégorie dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255|unique:categories,nom',
            'description' => 'nullable|string',
        ]);

        Categorie::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    // Affiche les détails d'une catégorie spécifique
    public function show(Categorie $categorie)
    {
        return view('categories.show', compact('categorie'));
    }

    // Affiche le formulaire pour éditer une catégorie existante
    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    // Met à jour une catégorie existante dans la base de données
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nom' => 'required|string|max:255|unique:categories,nom,' . $categorie->id,
            'description' => 'nullable|string',
        ]);

        $categorie->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    // Supprime une catégorie de la base de données
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
