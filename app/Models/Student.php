<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    static public function genAppNo($year){

        $uniq = substr(hexdec(uniqid()), -4);
        $num =   strval(rand(1000, 9999));   
        $str =  str_shuffle($num . $uniq);
    

      return   'APP/' . $year . '/' . $str;

    }


    public function course()
    {
      return $this->belongsTo(Course::class, 'course_id', 'id');

    }








}