<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('data.alldata');
    }

    public function showdata()
    {
        return view('data.show');  
    }

    public function showdata(Request $request)
   {
      Student::create($request -> all());
      return redirect('/') 
      ->with ('success', 'Student infometions created successfully.');
    }
}
