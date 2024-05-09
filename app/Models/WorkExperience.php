<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $fillable = ['resume_id','job_role','company','about','duration','job_type'];

    public function resume(){
        return $this->belongsTo(Resume::class);
    }
}
