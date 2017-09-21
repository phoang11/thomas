<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

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

    /**
     * Create a new student.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
        ]);

        $request->user()->students()->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);

        return redirect('/students');
    }

    /**
     * Destroy the given student.
     *
     * @param  Request  $request
     * @param  Student  $student
     * @return Response
     */
    public function destroy(Request $request, Student $student)
    {


        $student->delete();

        return redirect('/students');
    }

}
