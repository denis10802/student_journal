<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\StudentResponseDto;
use App\Models\Student;
use App\Service\StudentService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class StudentController extends Controller
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function index(StudentService $studentService): Response
    {
        $students = $studentService->list();

        return $this->responseFactory->view('admin.student.index',[
            'students' => $students
        ]);
    }
}
