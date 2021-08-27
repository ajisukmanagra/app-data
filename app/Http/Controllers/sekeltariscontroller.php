<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class sekeltariscontroller extends Controller
{
    public function index()
    {
        $sekeltaris = DB::table('sekeltaris')->get();

        return view('sekeltaris.index', ['sekeltaris' => $sekeltaris]);
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'sekeltaris';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = $request->token;
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $sekeltaris = \App\sekeltaris::create($request->all());
        return redirect('/sekeltaris')->with('sukses','data berhasil di input');
    }
    public function edit($id)
    {
        $sekeltaris = \App\sekeltaris::find($id);
        return view('sekeltaris.edit',['sekeltaris' => $sekeltaris]);
    }
    public function update(Request $request,$id)
    {
        //dd($request->all());
        $sekeltaris = \App\sekeltaris::find($id);
        $sekeltaris->update($request->all());
        return redirect('/sekeltaris')->with('sukses', 'data berhasil di update');
    }
    public function delete($id)
    {
        $sekeltaris = \App\sekeltaris::find($id);
        $sekeltaris->delete($sekeltaris);
        return redirect('/sekeltaris')->with('sukses', 'data berhasil di hapus');
    }
}
