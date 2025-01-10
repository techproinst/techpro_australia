<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReview extends Model
{
    use HasFactory;

    protected $guarded = [];
     
    const  STATUS_PENDING = 0;
    const  STATUS_APPROVED = 1;
    const  STATUS_DECLINED = -1;


    public function student()
    {
        return $this->belongsTo(Student::class)->whereNotNull('app_no');
    }
     
}
