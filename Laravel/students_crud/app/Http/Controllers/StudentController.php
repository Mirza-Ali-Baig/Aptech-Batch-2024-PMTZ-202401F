<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students=DB::table('students')->get();

       return view('students.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $student=DB::table('students')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'address'=>$request->address,
        'phone'=>$request->phone,
      ]);

      if($student){
        return redirect('/students');
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $studentV=DB::table('students')->where('id','=',$student->id)->first();
        // return $studentV;
        return view('students.show',['student'=>$studentV]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $studentV=DB::table('students')->where('id','=',$student->id)->first();

        return view('students.edit',['student'=>$studentV]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $studentV=DB::table('students')->where('id','=',$student->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'address'=>$request->address,
            'phone'=>$request->phone,
        ]);

        if($studentV){
            return redirect('/students');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       $studentV=DB::table('students')->where('id','=',$id)->delete();

       if($studentV){
        return redirect('/students');
       }
    }
}
