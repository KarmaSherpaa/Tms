<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceInfo extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','province_id','province_name','phone'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users(){
        return $this->hasManyThrough(UserProfile::class,User::class);
    }


}
