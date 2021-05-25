<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false ;
    public $primaryKey = 'product_id';
    public function Manufacture()
    {
        return $this->belongsTo('App\Manufacture','idManufacture');
    }
    public function Protype()
    {
        return $this->belongsTo('App\Protype','idProtype');
    }
}
