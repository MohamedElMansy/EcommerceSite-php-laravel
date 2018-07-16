<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ='products';
    protected $primaryKey = 'id';
    protected $fillable=['id','main_pic','description','price','slug','quantity'];



    public function category()
    {
        return $this->belongsToMany(category::class , 'product_category');

    }

    public function size()
    {
        return $this->belongsToMany('App\size','product_size');
    }

    public function colour()
    {
        return $this->belongsToMany('App\colour', 'product_colour');
    }
}
