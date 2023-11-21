<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Session extends Model
{
    use HasFactory;
    private static $session;
    public static function saveInfo($request, $id=null){
       self::$session = Session::find($id);
       if(self::$session)
       {
        self::$session->name = $request->name;
        }
        else{
        self::$session = new Session();
        self::$session->name = $request->name;
        }
        self::$session->save();

    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}
