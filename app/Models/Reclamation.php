<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = ['canal','contact','typereclamation','datesaisie','delai_traitement','entite_saisie','entite_traitement','saisie_par','etat','description'];  

}
