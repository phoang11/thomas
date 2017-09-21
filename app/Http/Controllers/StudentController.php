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
     * Show the specific student.
     *
     * @param  Request  $request
     * @param  Student  $student
     * @return Response
     */
    public function show(Request $request, Student $student)
    {

        return view('students.student', [
            'student' => $student,
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
     * Change the given student.
     *
     * @param  Request  $request
     * @param  Student  $student
     * @return Response
     */
    public function change(Request $request, Student $student)
    {
            return view('students.change', [
                'student' => $student,
        ]);
    }

    /**
     * Update the given student.
     *
     * @param  Request  $request
     * @param  Student  $student
     * @return Response
     */
    public function update(Request $request, Student $student)
    {
        //dd($request->firstname);

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;

        $student->save();


        return redirect('/student/' . $student->id);;
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
