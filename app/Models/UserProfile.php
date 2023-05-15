<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = ['province_id','user_id','phone','first_name','last_name','dob','gender','nationality','status','grandfather_name','father_name','mother_name','spouse_name','citizenship_numer','citizenship_issue_date','citizenship_documents','citizenship_documents_back','country','user_province','district','municipality','ward','tole','profile_picture','pan_number'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function province(){
        return $this->hasOne(ProvinceInfo::class,'province_id','province_id');
    }

}


 







