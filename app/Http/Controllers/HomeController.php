<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
//use Fpdf;
use PDF;
//use Symfony\Component\HttpFoundation\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaian=Penilaian::all();
        return view('home',compact('penilaian'));
    }

    public function cetak()
    {
        $penilaian=Penilaian::all();
        $pdf=PDF::loadView('cetak',['penilaian'=>$penilaian]);
        return $pdf->stream();
    }
}
