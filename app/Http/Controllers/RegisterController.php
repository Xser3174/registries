<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Carbon\carbon;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $registory= DB::table('registries')->get();
        
        return view('register/detail',['registory'=>$registory]);
        
        // return view('register.detail');
        #return route('detail',compact('registory'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $registery=DB::table('registries')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'age'=>$request->age,
            'role'=>$request->role,
        ]);
        return view('register/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // dd($id);
        
        $registery = DB::select('select * from registries where id = ?',[$id]);
        
        return view('register/edit',['registery'=>$registery]);

        //$registory=DB::table('registries')->where('id',$id)->get();
        // dd($registory);
        
        // return view('register/edit',compact('registory'));
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
        //
        // dd($request);
        $registery=DB::table('registries')
                        ->where('id', $id) 
                        ->update([  
                                    'name'=>$request->name,
                                    'email'=>$request->email,
                                    'number'=>$request->number,
                                    'age'=>$request->age,
                                    'role'=>$request->role
                                                                    
                                ]);
        return redirect()->route('list');
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
        // DB::delete('delete from registries where id = ?',[$id]);
        // return redirect()->route('list');

    

    // get list of all projects of client
    $projects = DB::table('registries')->where('id',$id)->get();

    DB::table('registries')->where('id',$id)->delete(); 

    // delete all projects of client
     

    return redirect()->route('list');

    }
}
