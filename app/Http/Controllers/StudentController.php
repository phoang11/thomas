<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Http\Requests\CreateStudentForm;

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
     * @param  CreateStudentForm $form
     * @return Response
     */
    public function store(CreateStudentForm $form)
    {
        $form->persist();

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

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;

        $student->save();

        return redirect('/student/' . $student->id);;
    }


    /**
     * Destroy the given student.
     *
     * @param  Student  $student
     * @return Response
     */
    public function destroy(Student $student)
    {

        $student->delete();

        return redirect('/students');
    }

}
