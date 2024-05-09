<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['resume_id','degree','school_name','school_location','field_of_study','month_year'];

    public function resume(){
        return $this->belongsTo(Resume::class);
    }
}
