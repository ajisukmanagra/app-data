<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswacontroller extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();

        return view('siswa.index', ['siswa' => $siswa]);
    }
    
    public function create(Request $request)
    {
        \App\siswamodel::create($request->all());
        return redirect('/siswa')->with('sukses','data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = \App\siswamodel::find($id);
        return view('siswa.edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        //dd($request->all());
        $siswa = \App\siswamodel::find($id);
        $siswa->update($request->all());
        if($request->hasfile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'data berhasil di update');
    }

    public function delete($id)
    {
        $siswa = \App\siswamodel::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'data berhasil di hapus');
    }

    public function profile($id)
    {
        $siswa = \App\siswamodel::find($id);
        return view('/siswa.profile',['siswa' => $siswa]);
    }
}
