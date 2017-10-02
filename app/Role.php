<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    /**
     * Get user has roles.
     */
     public function user()
     {
         return $this->belongsToMany(User::class);
     }
}
