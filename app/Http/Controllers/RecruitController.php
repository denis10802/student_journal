<?php

namespace App\Http\Controllers;

use App\Service\StudentService;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class RecruitController extends Controller
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function index(StudentService $studentService): Response
    {
        $recruits = $studentService->oldsStudentsList(18, 'm');

        return $this->responseFactory->view('admin.recruit.index',[
            'recruits' => $recruits,
        ]);
    }
}
