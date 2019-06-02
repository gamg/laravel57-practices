<?php

namespace App\Http\Controllers;

use App\Career;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.store');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:150',
            'last_name' =>  'required|max:150',
            'faculty_id' => 'required|exists:faculties,id',
            'career_id' => 'required|exists:careers,id',
        ]);

        Student::create($request->all());

        return 'Saved.';

    }

    public function getCareers(Request $request)
    {
        if ($request->ajax()) {
            $careers = Career::where('faculty_id', $request->faculty_id)->get();
            foreach ($careers as $career) {
                $careersArray[$career->id] = $career->name;
            }
            return response()->json($careersArray);
        }
    }
}
