<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    public $timestamps = false ;
    public $primaryKey = 'manu_id';
    public function Product()
    {
        return $this->hasMany('App\Product',"idManufacture","manu_id");
    }
}
