<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'Teacher_id',
        'Brand',
        'Information',
        'Image',
    ];
    public function Owner(){
        return $this->belongsTo(User::class);
    }
    public function PLanguage(){
        return $this->belongsTo(PLanguage::class);
    }
    public function Office(){
        return $this->belongsTo(Office::class);
    }
   
    use HasFactory;
}

