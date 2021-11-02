<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        public ResponseFactory $responseFactory,
    )
    {
        $this->middleware('auth');
    }


    public function index(): Response
    {
        return $this->responseFactory->view('admin.home');
    }
}
