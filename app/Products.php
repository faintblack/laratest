<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table="product";
    protected $primaryKey="id_product";
    protected $fillable=['name','stock'];
    public $timestamps = false;

}
