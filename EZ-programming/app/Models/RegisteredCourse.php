<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    protected $fillable = [
        'Course_id',
        'Teacher_id',
        'Student_id',
        'Start_date',
        'End_date',
    ];
    public function Teacher(){

        return $this->belongsTo(User::class);
    }
    public function Student(){

        return $this->belongsTo(User::class);
    }
    public function Course(){

        return $this->belongsTo(Course::class);
    }
    public function Office(){

        return $this->belongsTo(Office::class);
    }
    use HasFactory;
}
