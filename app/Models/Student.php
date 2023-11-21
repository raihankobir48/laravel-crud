<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public static $student, $image, $dir, $imgUrl,$imgNewName;

    public static function create($request){
        self::$student =new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->address = $request->address;
        if($request->file('image')){
            self::$student->image = self::saveImage($request);
        }
        self::$student->department_id = $request->department_id;
        self::$student->session_id = $request->session_id;



        self::$student->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = $request->name. '_'. rand().'.'.self::$image->extension();
        self::$dir = 'asset/image/';
        self::$imgUrl = self::$dir.self::$imgNewName;
        self::$image->move(self::$dir,self::$imgNewName);
        return self::$imgUrl;
    }

    public static function updated($request){
        self::$student = Student::find($request->id);

        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->address = $request->address;
        if($request->file('image')){
            if(file_exists(self::$student->image)){
                unlink(self::$student->image);
            }
            self::$student->image = self::saveImage($request);
        }
        self::$student->department_id = $request->department_id;
        self::$student->session_id = $request->session_id;
        self::$student->save();
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function session(){
        return $this->belongsTo(Session::class);
    }

  


}
