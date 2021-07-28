<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = "members";
    
    protected $fillable = 
    [
        'user_name','email_address'
    ];
    public function phone()
    {   
        return $this->hasOne('App\Models\Phone','user_id','id');
    }
}


