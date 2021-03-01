<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::findOrFail(Auth::user()->id);

        return view('dashboard', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::findOrFail(Auth::user()->id);

        return view('dashboard', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'student_number' => ['required', 'integer'],
            'first_name' => ['required', 'string' ,'max:40'],
            'preferred_name' => ['nullable', 'string' ,'max:40'],
            'middle_name' => ['nullable', 'string' ,'max:40'],
            'last_name' => ['required', 'string' ,'max:40'],
            'email' => ['nullable', 'email', 'string'],
            'cell_phone' => ['nullable', 'string', 'max:20'],
            'parent_status' => ['required', 'string' ,'max:40'],
            'student_lives_with' => ['required', 'string', 'max:40'],
            'primary_household_street' => ['required', 'string' ,'max:100'],
            'primary_household_unit_number' => ['nullable', 'string', 'max:10'],
            'primary_household_city' => ['required', 'string' ,'max:100'],
            'primary_household_state' => ['required', 'string', 'size:2'],
            'primary_household_zip' => ['nullable', 'required', 'string', 'max:10'],
            'primary_household_phone' => ['nullable', 'string', 'max:20'],
            'primary_household_mailing_street' => ['nullable', 'string' ,'max:100'],
            'primary_household_mailing_unit_number' => ['nullable', 'string', 'max:10'],
            'primary_household_mailing_city' => ['nullable', 'string' ,'max:100'],
            'primary_household_mailing_state' => ['nullable', 'string', 'size:2'],
            'primary_household_mailing_zip' => ['nullable', 'string', 'max:10'],
            'contact_1_relation' => ['required', 'string' ,'max:40'],
            'contact_1_title' => ['required', 'string' ,'max:10'],
            'contact_1_first_name' => ['required', 'string' ,'max:40'],
            'contact_1_last_name' => ['required', 'string' ,'max:40'],
            'contact_1_email' => ['required', 'string' ,'max:100'],
            'contact_1_cell' => ['required', 'string', 'max:20'],
            'contact_1_work_phone' => ['nullable', 'string', 'max:20'],
            'contact_2_relation' => ['nullable', 'string' ,'max:40'],
            'contact_2_title' => ['nullable', 'string' ,'max:10'],
            'contact_2_first_name' => ['nullable', 'string' ,'max:40'],
            'contact_2_last_name' => ['nullable', 'string' ,'max:40'],
            'contact_2_email' => ['nullable', 'string' ,'max:100'],
            'contact_2_cell' => ['nullable', 'string', 'max:20'],
            'contact_2_work_phone' => ['nullable', 'string', 'max:20'],
            'secondary_household_street' => ['nullable', 'string' ,'max:100'],
            'secondary_household_unit_number' => ['nullable', 'string' ,'max:10'],
            'secondary_household_city' => ['nullable', 'string' ,'max:100'],
            'secondary_household_state' => ['nullable', 'string', 'size:2'],
            'secondary_household_zip' => ['nullable', 'string' ,'max:10'],
            'secondary_household_phone' => ['nullable', 'string', 'max:20'],
            'secondary_household_mailing_street' => ['nullable', 'string' ,'max:100'],
            'secondary_household_mailing_unit_number' => ['nullable', 'string' ,'max:10'],
            'secondary_household_mailing_city' => ['nullable', 'string' ,'max:100'],
            'secondary_household_mailing_state' => ['nullable', 'string', 'size:2'],
            'secondary_household_mailing_zip' => ['nullable', 'string' ,'max:10'],
            'contact_3_relation' => ['nullable', 'string' ,'max:40'],
            'contact_3_title' => ['nullable', 'string' ,'max:10'],
            'contact_3_first_name' => ['nullable', 'string' ,'max:40'],
            'contact_3_last_name' => ['nullable', 'string' ,'max:40'],
            'contact_3_email' => ['nullable', 'string' ,'max:100'],
            'contact_3_cell' => ['nullable', 'string', 'max:20'],
            'contact_3_work_phone' => ['nullable', 'string', 'max:20'],
            'contact_4_relation' => ['nullable', 'string' ,'max:40'],
            'contact_4_title' => ['nullable', 'string' ,'max:10'],
            'contact_4_first_name' => ['nullable', 'string' ,'max:40'],
            'contact_4_last_name' => ['nullable', 'string' ,'max:40'],
            'contact_4_email' => ['nullable', 'string' ,'max:100'],
            'contact_4_cell' => ['nullable', 'string', 'max:20'],
            'contact_4_work_phone' => ['nullable', 'string', 'max:20'],
            'tuition_payer' => ['nullable', 'required', 'string', 'max:40'],
            'tuition_statement' => ['nullable', 'required', 'string', 'max:40'],
            'photo_publication' => ['required', 'boolean'],
        ]);

        $student = Student::where('id', Auth::user()->id);
        $student->update($validatedData);

        Auth::logout();
        return redirect('/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
