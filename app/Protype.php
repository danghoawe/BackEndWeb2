<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Protype extends Model
{
    public $timestamps = false ;
    public $primaryKey = 'protype_id';
    public function Product()
    {
        return $this->hasMany('App\Product',"idProtype","protype_id");
    }
}
