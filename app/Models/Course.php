<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function paymentSchedule() 
    {
        return $this->hasOne(PaymentSchedule::class, 'course_id', 'id');
    }
}
