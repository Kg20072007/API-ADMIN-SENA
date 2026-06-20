<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    // Si tu tabla intermedia se llama diferente en la migración, Laravel la busca en plural por defecto
    protected $table = 'course_teacher'; 

    protected $fillable = ['course_id', 'teacher_id'];
}