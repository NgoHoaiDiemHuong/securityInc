<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id','name','birthday','identity_card_number','company','address','phone_number','email','description','keywords'];
    public $timestamps = false;

    //Mot khach hang co nhieu don dat hang
    public function customer(){
        // return this->hasMany('App\orders');
    }
    
}
