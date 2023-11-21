<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class StudentController extends Controller
{
    private static $student;
    public function create(Request $request){
        Student::create($request);
        return back();
    }

    public function studentManage(){

        // self::$student =DB::table('students')
        // ->join('departments','students.department_id','departments.id')
        // ->join('sessions','students.session_id','sessions.id')
        // ->select('students.*','departments.name','departments.code','sessions.name')
        // ->get();

        // return self::$student;

        return view('read', [
            'students'=>Student::all()
        ]);
    }

    public function edit($id){
        return view('edit',[
            'student'=>Student::find($id)
        ]);
    }

    public function update(Request $request){
        Student::updated($request);
        return back();
    }

    public function delete(Request $request){
        self::$student = Student::find($request->id);
        if(self::$student->image){
            if(file_exists(self::$student->image)){
                unlink(self::$student->image);
            }
        }
        self::$student -> delete();
        return back();
    }
}
