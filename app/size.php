<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $table="size";

    protected $primaryKey="id";


    public function product()
    {
        return $this->belongsToMany('App\product','product_size');
    }
}
