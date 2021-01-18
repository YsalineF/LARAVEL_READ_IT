<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{

    // use HasFactory;

    /**
     * GETTER des posts du auteur.
     */
    public function posts() {
      return $this->hasMany('App\Models\Post');
    }
}
