<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function role() {

        return $this->belongsTo('App\Role');
    }


}
