<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'code', 'quantite', 'quantite_min', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
}
