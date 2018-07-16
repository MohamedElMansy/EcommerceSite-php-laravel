<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="category";

    protected $primaryKey="id";
    protected $fillable=['title' , 'id'];



    public function product()
    {
        return $this->belongsToMany('App\product','product_category');
    }
}
