<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'managers';
    protected $fillable = ['employee_code','manager_code','from_date','to_date'];
    public $timestamps = false;
}

