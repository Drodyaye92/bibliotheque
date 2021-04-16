<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    //
    protected $fillable = ['titre','type','dateparution','id_auteurl'];
    protected $primaryKey= 'id_livre';
}
