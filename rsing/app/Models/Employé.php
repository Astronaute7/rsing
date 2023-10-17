<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employé extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'telephone', 'statut', 'email', 'password',];
    public function ventes(): BelongsTo
    {
        return $this->belongsTo(Vente::class);
    }
}
