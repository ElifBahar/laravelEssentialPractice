<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        // 1. Using raw SQL queries //returns array
        // $users = DB::select('select * from users');
        // dd($users);

        // 2. Query Builder //returns collection
        // $users = DB::table('users')->select('name','email')->whereNotNull('email')->orderBy('name')->get();
        // dd($users);

        // 3. Eloquent ORM
        //$students = Student::all(); // returns collection
        //foreach ($students as $student){
        //    echo $student->name. "<br>";
        //}


        //inserting data to database
        $student = new Student();
        $student->name = 'Bahar';
        $student->email = 'email@email.com';
        $student->save();


        return view('welcome');
    }
}
