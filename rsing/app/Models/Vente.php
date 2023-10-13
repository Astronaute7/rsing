<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Vente extends Model
{
    use HasFactory;
        protected $fillable = ['nom', 'date', 'quantité','prixTotal','id_employé',];

        public function employés(): HasMany
        {
            return $this->hasMany(Employé::class);
        }
        public function produits(): BelongsToMany
        {
            return $this->belongsToMany(Produit::class);
        }

}
