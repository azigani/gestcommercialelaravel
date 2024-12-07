<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;
    protected $fillable = ['article_id', 'quantite', 'emplacement_source', 'emplacement_destination'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
