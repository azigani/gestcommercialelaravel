<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = ['client', 'montant_total', 'date_vente'];

    public function lignes()
    {
        return $this->hasMany(LigneVente::class);
    }
}
