<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable=[
        'course',
        'university',
        'year',
        'candidate_id',

    ];
    public function setCourseAttribute($value)
    {
        $this->attributes["course"]=json_encode($value);
    }
     public function getCourseAttribute($value)
    {
    $this->attributes["course"]=json_decode($value);

    }
    public function setUniversityAttribute($value)
    {
        $this->attributes["university"]=json_encode($value);
    }
     public function getUniversityAttribute($value)
    {
    $this->attributes["university"]=json_decode($value);

    }
    public function setYearAttribute($value)
    {
        $this->attributes["year"]=json_encode($value);
    }
     public function getYearAttribute($value)
    {
    $this->attributes["year"]=json_decode($value);

    }
protected $casts=['course'=>'array',
'university'=>'array',
'year'=>'array'];

}