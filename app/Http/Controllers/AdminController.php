<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dtMatkul = Matkul::all();
        //return $dtMatkul;
        return view('data-matkul', compact('dtMatkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-matkul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //dd($request->all());
        Matkul::create([
           'semester' => $request->semester,
            'hari'=> $request->hari,
           'matkul'=>$request->matkul,
         'dosen'=>$request->dosen,
          'jam'=>$request->jam,
          'sks'=>$request->sks,
          'waktu'=>$request->waktu,
        ]);

        return redirect()->route('data-matkul');
    }
    //'id', 'semester', 'hari', 'matkul', 'dosen', 'jam', 'sks', 'waktu'
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = Matkul::find($id);

        return view('edit-matkul', compact('matkul'));
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
        //return $request->jam;
        $request->validate([
            'semester'=>['required','string','max:255'],
            'hari'=>['required','string','max:255'],
            'matkul'=>['required','string','max:255'],
            'dosen'=>['required','string','max:255'],
            'jam'=>['required','numeric','max:255'],
            'sks'=>['required','numeric','max:255'],
            'waktu'=>['required','string','max:255'],

        ]);
        $matkuli = Matkul::find($id);
        $matkuli ->update([
            'semester'=>$request->semester,
            'hari'=>$request->hari,
            'matkul'=>$request->matkul,
            'dosen'=>$request->dosen,
            'jam'=>$request->jam,
            'sks'=>$request->sks,
            'waktu'=>$request->waktu,

        ]);
        return redirect()->route('data-matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Matkul::destroy($id);
        return redirect()->route('data-matkul');
    }
}
