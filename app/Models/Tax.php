<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    protected $fillable =['mothly_salary','user_id','epf_contribution','ssf_contribution','sit_contribution','cit_contribution','life_insurance','health_insurance','house_insurance','donation','other_allowed_deduction','medical_expences','gross_income'];
}
