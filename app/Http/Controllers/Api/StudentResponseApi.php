<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResourse;
use App\Models\Course;
use App\Models\Student;
use App\Service\StudentService;
use Illuminate\Http\Request;

class StudentResponseApi extends Controller
{
    public function course($id, StudentService $studentService): StudentResourse
    {
        return new StudentResourse($studentService->courses($id));
    }
}
