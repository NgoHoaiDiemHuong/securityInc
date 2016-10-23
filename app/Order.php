<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['name','id','service_code','user_code','customer_code','order_date','description'];
    public $timestamps = false;

    //Mot don dat hang thuoc 1 khach hang
    public function customer(){
        return this->belongsTo('App\customers');
    }

    //Mot don dat hang co nhieu task
    public function processTimes(){
        return this->hasMany('App\processTimes','order_id');
    }

    //Mot don dat hang thuoc mot dich vu
    public function service(){
        return this->hasMany('App\services','service_code');
    }
    
    //Mot don dat hang do mot nhan vien thuc hien
    public function users(){
        return this->belongsTo('App\users','user_code');
    }
}
