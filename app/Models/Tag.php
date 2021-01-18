<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // use HasFactory;

    /**
     * GETTER du posts du tag.
     */
    public function posts(){
        return $this->belongsToMany('App\Models\Post', 'posts_has_tags');
    }
}
