<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view("mhs",['mahasiswa'=> $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah',['title'=>'Tambah Data']);
    }
    public function about()
    {
        return view('aboutme', [
            'title' => 'About',
            'judul1' => 'About Me',
            'judul2' => 'Background',
            'judul3' => 'Suka Duka Praktikum PAW'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => "required",
            'nrp' => "required",
            'email' => "required",
            'alamat' => "required",
        ]);
        mahasiswa::create($data);
        return redirect('/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $mahasiswa = mahasiswa::all();
        return view("mhs",['mahasiswa'=> $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('edit',compact(['mahasiswa']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->except(['submit']));
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete($request->except(['submit']));
        return redirect('/show');
    }
}
