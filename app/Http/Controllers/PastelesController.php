<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastel;

class PastelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasteles = Pastel::get();
		return view('pasteles.index')->with('pasteles', $pasteles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasteles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pastel = new Pastel;
		$pastel->nombre = $request->input('nombre');
		$pastel->sabor = $request->input('sabor');
		
		$pastel->save();
		
		return redirect()->route('pasteles.index');
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
        $pastel = Pastel::find($id);
		return view('pasteles.edit')->with('pastel', $pastel);
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
        $pastel = Pastel::find($id);
		$pastel->nombre = $request->input('nombre'); 
		$pastel->sabor = $request->input('sabor');
		$pastel->save();
		
		return redirect()->route('pasteles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pastel::destroy($id);
		
		return redirect()->route('pasteles.index');
		
    }
}
