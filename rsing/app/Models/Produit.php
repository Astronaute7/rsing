<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prixUnitaire','quantitéEnStock',];


    public function ventes(): BelongsToMany
    {
        return $this->belongsToMany(Vente::class);
    }
}
