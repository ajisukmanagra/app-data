<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class agendacontroller extends Controller
{
    public function index()
    {
        $agenda = DB::table('agenda')->get();

        return view('agenda.index', ['agenda' => $agenda]);
    }
    public function create(Request $request)
    {
        \App\agendamodel::create($request->all());
        return redirect('/agenda')->with('sukses','data berhasil di input');
    }
    public function edit($id)
    {
        $agenda = \App\agendamodel::find($id);
        return view('agenda.edit',['agenda' => $agenda]);
    }
    public function update(Request $request,$id)
    {
        //dd($request->all());
        $agenda = \App\agendamodel::find($id);
        $agenda->update($request->all());
        return redirect('/agenda')->with('sukses', 'data berhasil di update');
    }
    public function delete($id)
    {
        $agenda = \App\agendamodel::find($id);
        $agenda->delete($agenda);
        return redirect('/agenda')->with('sukses', 'data berhasil di hapus');
    }
}
