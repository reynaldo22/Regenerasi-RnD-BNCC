<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function list() {
        $data = Mahasiswa::all();
        return view('home',compact('data'));
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
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'age' => 'required',
            'phone' => 'required'
        ]);
        $mahasiswa = new Mahasiswa([
            'nama' => $request->get('name'),
            'nim' => $request->get('nim'),
            'umur' => $request->get('age'),
            'phone' => $request->get('phone'),
        ]);
        $mahasiswa->save();
        return redirect('/')->with('status','Mahasiswa has been added!');
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
        $edit = Mahasiswa::find($id);
        return view ('edit',compact('edit'));
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
        $mahasiswa = Mahasiswa::find($id);
        $data = [
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'umur' => $request->input('umur'),
            'phone' => $request->input('phone'),
        ];
        $mahasiswa->update($data);
        return redirect('/')->with('status','Mahasiswa has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/')->with('status','Mahasiswa has been deleted!');
    }
}
