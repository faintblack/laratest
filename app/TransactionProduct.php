<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    protected $table="transaction_product";
    protected $primaryKey="id_transaction_product";
    protected $fillable=['id_transaction','id_product'];
    public $timestamps = false;

}
