<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * GETTER du post du comment
     */
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
