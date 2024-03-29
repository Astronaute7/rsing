<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'statut','description', 'id_client',];
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
