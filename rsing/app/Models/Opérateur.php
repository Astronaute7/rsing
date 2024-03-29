<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opérateur extends Model
{
    use HasFactory;
    protected $fillable=['nom','montant', 'date', 'type', 'telephone',];
}
