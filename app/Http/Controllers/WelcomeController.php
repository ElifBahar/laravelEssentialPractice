<?php

namespace App\Http\Controllers;

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


        return view('welcome');
    }
}
