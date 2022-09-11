<?php

namespace App\Http\Controllers;

use App\Models\fieul;
use Illuminate\Http\Request;

class fieulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieul = fieul::all();


return view("site.liste", compact("fieul"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("site.inscription");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date_naissance' => 'bail|required|date|',
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            "telephone" => 'bail|required',
            "pass" => 'bail|required',
        ]);
    
        
      
      
        fieul::create([
            "date_naissance" => $request->date_naissance,
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "telephone" => $request->telephone,
            "pass" => $request->pass,
        ]);
    
      
        return view("site.inscription");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fieul  $fieul
     * @return \Illuminate\Http\Response
     */
    public function show(fieul $fieul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fieul  $fieul
     * @return \Illuminate\Http\Response
     */
    public function edit(fieul $fieul)
    {
        return view("site.inscription", compact("fieul"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fieul  $fieul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fieul $fieul)
    {
        $request->validate([
            'date_naissance' => 'bail|required|date|',
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            "telephone" => 'bail|required',
            "pass" => 'bail|required',

        ]);

        $fieul->update(
            [ 
                "date_naissance" => $request->date_naissance,
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "telephone" => $request->telephone,
                "pass" => $request->pass,
            ]
        );
        return redirect(route("fieul.index"));
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fieul  $fieul
     * @return \Illuminate\Http\Response
     */
    public function destroy(fieul $fieul)
    {
        $fieul->delete();

        return redirect(route('fieul.index'));
    }
}











































































