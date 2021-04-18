<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    //
    public function livres(){
        return $this->hasMany('App\livre');
    }
}
