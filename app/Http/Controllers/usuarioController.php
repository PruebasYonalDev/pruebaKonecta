<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('users')
        ->select(
            'name',
            'email'
        )
        ->get();

    return view('home')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(userRequest $request)
    {
        $us = DB::table('users')->insert([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'rol' => $request['rol'],
            'email' => $request['email'],
            'password' => $request['password']
            // 'token' => $request['token']
        ]);

        return response()->json($us);
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
        $data = DB::table('users')->where('id',$id)
        ->select(
            'id',
            'name',
            'rol',
            'email'
    )
    ->get();

    // return $data;
    return view('signup.editSign', ['datos' => $data]);
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
        DB::table('users')->where('id', $id)
        ->update([
            'id' => $request['id'],
            'name' => $request['name'],
            'rol' => $request['rol'],
            'email' => $request['email']
        ]);

        return redirect('api/home');
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

        DB::table('users')->where('id', $id)->delete();

       return redirect('api/home');
    }
}
