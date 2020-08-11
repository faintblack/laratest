<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table="transaction";
    protected $primaryKey="id_transaction";
    protected $fillable=['waktu'];
    public $timestamps = false;

}
