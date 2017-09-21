<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
      * Create a new controller instance.
      *
      * @return void
      */
     public function __construct()
     {
         $this->middleware('auth');
     }

     /**
     * Display a list of all of the user's student.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $students = $request->user()->students()->get();

        return view('students.index', [
            'students' => $students,
        ]);
    }
}
