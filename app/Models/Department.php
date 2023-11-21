<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    private static $department;
    public static function saveInfo($request, $id=null){
       self::$department = Department::find($id);
       if(self::$department)
       {
        self::$department->name = $request->name;
        self::$department->code = $request->code;

        }
        else{
        self::$department = new Department();
        self::$department->name = $request->name;
        self::$department->code = $request->code;

        }
        self::$department->save();

    }

    public static function statusCheck($id){
        self::$department = Department::find($id);
        if(self::$department->status == 1){
            self::$department->status = 0;
        }
        else{
            self::$department->status = 1;
        }
        self::$department->save();
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
