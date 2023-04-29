<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        protected $fillable = ['nomoffre','dtdebut','dtfin','etat','user_id','description'];  
}
