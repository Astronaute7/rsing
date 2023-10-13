<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Service extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prix', 'description',];
    public function commandes(): BelongsToMany
    {
        return $this->belongsToMany(Commande::class);
    }


}
