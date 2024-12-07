<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    use HasFactory;
    protected $fillable = ['article_id', 'quantite_theorique', 'quantite_reelle', 'ecart'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
