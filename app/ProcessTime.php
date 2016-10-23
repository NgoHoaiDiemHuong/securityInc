<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessTime extends Model
{
    protected $table = 'processTimes';
    protected $fillable = ['id','service_code','order_id','start_date','finish_date','start_hour','finis_hour'];
    public $timestamps = false;

    //mot cong viec thuoc mot ban dat hang
    public function order(){
        return this->belongsTo('App\orders','id');
    }
    
    // mot cong viec thuoc mot dich vu
    public function service(){
        return this->belongsTo('App\services','service_code');
    }

}

