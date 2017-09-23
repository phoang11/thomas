<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'first_name' => 'required|max:255|alpha_dash',
            'last_name' => 'required|max:255|alpha_dash',
            'middle_name' => 'max:100|alpha_dash',
            'date_of_birth'=> 'date|before:today',
            'father_name' => 'max:255|alpha_dash',
            'mother_name' => 'max:255|alpha_dash',
            'address' => 'alpha_dash',
            'address2' => 'alpha_dash',
            'city' => 'max:100|alpha',
            'zipcode' => 'digits:5',
            'phone1' => 'digits:10',
            'phone2' => 'digits:10',
        ]);

        $request->user()->students()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'date_of_birth'=> Carbon::create(2017,9,23),
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
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

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;

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
