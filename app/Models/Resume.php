<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','job_role_id','job_description','first_name','last_name','phone',
    'email','address','state','linkedin','option_resume','option_create_by'];

    public function name(){
        return $this->first_name . ' '. $this->last_name;
    }
    public function education(){
        return $this->hasMany(Education::class);
    }
    public function workExperiences(){
        return $this->hasMany(WorkExperience::class);
    }
    public function skills(){
        return $this->hasMany(Skill::class);
    }
}
