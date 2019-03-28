<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categoria extends Model
{
    use SoftDeletes;

    public function produto(){
        return $this->hasMany('App\Produto');
    }
}
