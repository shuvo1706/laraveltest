<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\test;
use Illuminate\Support\Facades\Input;


class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {

    /* return view('sign',[test=>test::all()]);*/
    }

    public function save(Request $request)
    {
      /*
  $data=['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'password'=>$request->password];
   DB::table('test')->insert($data);
   return back();*/

    }
    public function index()
    {
/*$alldata=test::paginate(1);

/*$alldata=['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'password'=>$request->password];*/
/*echo $alldata;

    /* return view('sign',[test=>test::all()]);
    */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=new test;
      $user->first_name=Input::get("first_name");
      $user->last_name=Input::get("last_name");
          $user->email=Input::get("email");
            $user->password=Input::get("password");
              $user->save();
              $alldata=test::paginate(10);


       return  view('shuvo',compact('alldata'));

    /*  test::create(Request::all());
        return 'test';*/
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
    }
}
