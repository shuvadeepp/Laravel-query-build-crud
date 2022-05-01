<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class Anocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = DB::table('demo_tab')->get();
        // return view('welcome', ['user'=>$user]);
        return view('welcome', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);


        DB::table('demo_tab')->insert([
            'username' =>$request->username,
            'email' =>$request->email,
            'phone' =>$request->phone,
        ]);
        return redirect(route('index'))->with('status', 'Data Submitted Successfully');
        // return view('welcome')->with('status', 'Data Submitted Successfully');
    }

    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edituser = DB::table('demo_tab')->find($id);
        return view('editform', ['edituser'=>$edituser]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        DB::table('demo_tab')->where('id', $id)->update([
            'username' =>$request->username,
            'email' =>$request->email,
            'phone' =>$request->phone,
        ]);
        return redirect(route('index'))->with('status', 'Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('demo_tab')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Data deleted Successfully');
    }
}
