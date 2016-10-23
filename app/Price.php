<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = ['id','price'];
    public $timestamps = false;

    //mot gia thuoc nhieu dich vu, "co nhieu dich vu dong gia"
    public function services(){
    	return this->belongsToMany('App\services','price_service_time');
    }
    
}
