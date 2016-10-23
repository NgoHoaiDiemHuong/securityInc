<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['id','service_code','service_name','keywords','status','description'];
    public $timestamps = false;

	//Mot dich vu co nhieu don dat hang
    public function orders(){
    	 return this->hasMany('App\orders','service_code');
    }

    //Mot dich vu se co mot gia tai mot thoi diem=> nhieu gia tai nhieu thoi diem
    public function prices(){
    	 return this->belongsToMany('App\prices','price_service_time');
    }
    
    //Mot dich vu co nhieu cong viec
     public function processTime(){
    	 return this->hasMany('App\processTimes');
    }
    
}
