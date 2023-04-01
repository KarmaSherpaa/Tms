<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = ['province_id','user_id','phone'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function province(){
        return $this->hasOne(ProvinceInfo::class,'province_id','province_id');
    }

}
