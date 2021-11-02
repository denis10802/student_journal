<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecruitResourse;
use App\Service\StudentService;
use Illuminate\Http\Request;

class RecruitResponseApi extends Controller
{
    public function recruits($gender, $age, StudentService $studentService): RecruitResourse
    {
        return new RecruitResourse($studentService->oldsStudentsList($age, $gender));
    }
}
