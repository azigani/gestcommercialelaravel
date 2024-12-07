<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = ['commande_id', 'numero_facture', 'date_facture', 'montant_total'];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

}
