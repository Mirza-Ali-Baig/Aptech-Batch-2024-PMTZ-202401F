<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
//        echo "Hello Im a Controller Index Method";
//        return view('welcome');
        // select * from employees
        $employees = DB::table('employees')->get();

        return $employees;
    }

    public function create()
    {
//        echo "Hello Im a Controller Create Method";
        $employee = [
            'name' => "Haris",
            'email' => 'haris@gmail.com',
            'city' => 'Karachi',
            'salary' => 500000
        ];

        return DB::table('employees')->insert($employee);
    }
}

// Query Builder => DB
// Eloquent ORM => Model
