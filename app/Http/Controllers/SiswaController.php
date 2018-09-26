<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.createcopy');
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
              'nama'   => 'required|string|min:3',
              'nis'    => 'required|unique:siswas|max:10',
              'alamat' => 'required',
              'foto'   => 'required'
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')
                         ->with('sukses','berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $siswa=Siswa::findOrFail($siswa)->first();
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa=Siswa::findOrFail($siswa)->first();
        $this->validate($request,[
            'nama'   => 'required|string|min:3',
            'nis'    => 'required|max:10',
            'alamat' => 'required',
            'foto'   => 'required'
      ]);
       $siswa->update($request->all());
       return redirect()->route('siswa.index')
                         ->with('edit','berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa=Siswa::findOrFail($siswa)->first();
        $siswa->delete();
        return redirect()->route('siswa.index')
                         ->with('hapus','berhasil hapus data');

    }

    public function dataTable()
    {
        $siswa=Siswa::query();
        return Datatables::of($siswa)
        ->addColumn('foto',function($siswa){
            return '<img src="'.asset($siswa->foto).'" height="32" width="32">';
        })
        ->addIndexColumn()
        ->addColumn('action',function($siswa){
            return view('layouts.button',[
                'model'=>$siswa,
                'edit'=>route('siswa.edit',$siswa->id),
                'hapus'=>route('siswa.destroy',$siswa->id)
            ]);
        })
        ->rawColumns(['foto','action'])
        ->make(true);
     }
}
