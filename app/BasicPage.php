<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicPage extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
