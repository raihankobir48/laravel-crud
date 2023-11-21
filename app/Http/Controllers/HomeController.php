<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('create',[
            'departments'=> Department::where('status',1)->get(),
            'sessions'=>Session::all()
        ]);
    }
}
