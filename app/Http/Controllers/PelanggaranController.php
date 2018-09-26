<?php

namespace App\Http\Controllers;

use App\Pelanggaran;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'bobot'=>'numeric'
        ]);
        Pelanggaran::create($request->all());
        return redirect()->route('pelanggaran.index')
                         ->with('sukses','berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran)
    {

       $pelanggaran=Pelanggaran::findOrFail($pelanggaran)->first();
        return view('pelanggaran.edit',compact('pelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        $pelanggaran=Pelanggaran::findOrFail($pelanggaran)->first();
        $this->validate($request,[
            'nama'=>'required',
            'bobot'=>'numeric'
        ]);
        $pelanggaran->update($request->all());
        return redirect()->route('pelanggaran.index')
                         ->with('edit','berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        $pelanggaran=Pelanggaran::findOrFail($pelanggaran)->first();
        $pelanggaran->delete();
        return redirect()->route('pelanggaran.index')->with('hapus','sukses menghapus data');
    }

    public function data()
    {
        $pelanggaran=Pelanggaran::query();
        return Datatables::of($pelanggaran)
        ->addIndexColumn()
        ->addColumn('action',function($pelanggaran){
          return view('layouts.button',[
             'model'=>$pelanggaran,
             'edit' =>route('pelanggaran.edit',$pelanggaran->id),
             'hapus'=>route('pelanggaran.destroy',$pelanggaran->id)
          ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }

}
