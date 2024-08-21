<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_name',
        'class_teacher_id',
        'class',
        'admission_date',
        'yearly_fees',
        'gender',
        'phone_number',
    ];

    protected $casts = [
        'admission_date' => 'date',
        'yearly_fees' => 'decimal:2',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'class_teacher_id');
    }
}
