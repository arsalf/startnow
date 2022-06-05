<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\BSON\ObjectID;

class StartupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registerstartups');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        //          
        $startup = Startup::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'owner'     => Auth::user()->username,
            'deskripsi' => $data['deskripsi'],
            'no_hp' => $data['nohp'],
            'tanggal_berdiri' => $data['tgl_lahir'],
            'alamat' => $data['alamat']
        ]);
        return redirect(route('startups.show', $startup->_id));
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
        $startup = Startup::find($id);
        $columns = $startup->getHidden();

        return view('startups', ['startup' => $startup, 'hidden' => $columns]);
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
        $startup = Startup::find($id);        

        return view('editstartups', ['startup' => $startup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        //        
        $startup =  Startup::find($id);
        $startup->name = $data['name'];
        $startup->email = $data['email'];
        $startup->owner = Auth::user()->username;
        $startup->deskripsi = $data['deskripsi'];
        $startup->no_hp = $data['nohp'];
        $startup->tanggal_berdiri = $data['tgl_lahir'];
        $startup->alamat = $data['alamat'];
        $startup->save();
        
        return redirect(route('startups.show', $startup->_id));
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
