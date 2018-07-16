<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table="company_info";
    protected $id = "id";
    protected $fillable =['address','phone','sale_support'];
}
