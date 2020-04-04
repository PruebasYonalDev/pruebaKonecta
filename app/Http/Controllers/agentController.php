<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class agentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = DB::table('agent')
            ->select(
                'document',
                'name',
                'lastname',
                'email',
                'address'
            )
            ->get();

        $data2 = DB::table('users')
            ->select(
            'id',
            'name',
            'email',
            'rol'
        )
        ->get();

        return view('home')->with('data', $data)->with('data2', $data2);
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

        $agent = DB::table('agent')->insert([
            'document'=> $request['document'],
            'name'=> $request['name'],
            'lastname'=> $request['lastname'],
            'email'=> $request['email'],
            'address'=> $request['address']
        ]);

        return response()->json($agent);

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
        $data = DB::table('agent')->where('document',$id)
            ->select(
                'document',
                'name',
                'lastname',
                'email',
                'address'
        )
        ->get();

        // return $data;
        return view('agent.editAgent', ['datos' => $data]);
        // return view('agent.editAgent',compact('data'));

        
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
        DB::table('agent')->where('document', $id)
        ->update([
            'document'=> $request['document'],
            'name'=> $request['name'],
            'lastname'=> $request['lastname'],
            'email'=> $request['email'],
            'address'=> $request['address']
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

       DB::table('agent')->where('document', $id)->delete();

       return redirect('api/home');

    }
}
