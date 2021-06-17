<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $primaryKey = 'comment_id';
    public function Product(){
        return $this->belongsTo('App\Product','product_id');
    }

    public function user(){
        return $this->belongsTo('App\User','id');
    }
}
