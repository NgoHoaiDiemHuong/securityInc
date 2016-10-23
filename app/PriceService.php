<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceService extends Model
{
    protected $table = 'price_service_time';
    protected $fillable=['service_code','price_service','start_date','finish_date']
    public $timestamps = false;
}
