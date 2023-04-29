<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'canal',
        'contact',
        'typereclamation',
        'delai_traitement',
        'entite_traitement',
        'etat',
        'description',
        'user_id', // Add the user_id field to fillable fields
    ];

    // Define the user relationship method
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

