<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colour extends Model
{
    protected $table ='colour';
    protected $primaryKey ='id';
    protected $fillable=['id','name'];

    public function product()
    {
        return $this->belongsToMany('App\product','product_colour');
    }
}
