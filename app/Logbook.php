<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbook';

    public function student()
    {
    	return $this->belongsTo(Student::class, 'student_id','id');
    }

    public function teacher()
    {
    	return $this->belongsTo(User::class, 'teacher_id','id');
    }

    public function scopeMyChild($query , $ids)
    {
        return $query->whereIn('student_id', $ids);
    }
}
