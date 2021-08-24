<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function data()
    {
        $agenda = DB::table('agenda')->get();
        // return view('agenda.data',['agenda'=>$agenda]);
        return view('agenda.data')->with('agenda',$agenda);
    }

    public function add()
    {
        return view('agenda.add');
    }

    public function addProcess(Request $request )
    {
        DB::table('agenda')->insert([
            'nama_acara' => $request->name,
            'lokasi' => $request->location,
            'tanggal' => $request->date,
            'hadirin' => $request->hadir,
        ]);
        return redirect('agenda')->with('status','berhasil ditambah'); 
        // $request;
    }
    public function edit($id)
    {
        $agenda = DB::table('agenda')->where('id', $id)->first();
        return view('agenda.edit', compact('agenda'));
    }
    
    public function editProccess(Request $request, $id )
    {
        DB::table('agenda')->where('id', $id)
        ->update([
            'nama_acara' => $request->name,
            'lokasi' => $request->location,
            'tanggal' => $request->date,
            'hadirin' => $request->hadir,
        ]);
        return redirect('agenda')->with('status','berhasil diedit');
    }
   
    public function delete($id)
    {
        DB::table('agenda')->where('id', $id)->delete();
        return redirect('agenda')->with('status','berhasil dihapus');
    }
}
