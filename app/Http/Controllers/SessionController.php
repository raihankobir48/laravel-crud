<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public static $session;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('session.index',[
            'sessions'=>Session::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('session.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::saveInfo($request);
        return redirect(route('sessions.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('session.edit',[
            'session'=>Session::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Session::saveInfo($request, $id);
        return redirect(route('sessions.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$session =  Session::find($id);
      self::$session->delete();
      return back();
    }

    public function sessionWiseStudent(){
        return view('session.session-wise-student',[
            'sessions'=>Session::all()
        ]);
    }
}
