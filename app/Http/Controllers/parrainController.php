<?php

namespace App\Http\Controllers;

use App\Models\fieul;
use App\Models\parrain;
use Illuminate\Http\Request;

class parrainController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parrains = parrain::all();
        return view("site.parrainage", compact("parrains"));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fieuls = fieul::orderBy("nom","asc")->get();
        return view("site.parrain ",compact("fieuls"));
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
          
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            'date_naissance' => 'bail|required|date|',
            "email" => 'bail|required',
            "password" => 'bail|required',
            "fieul_id" => 'bail|required',
        ]);
    
        
      
      
        parrain::create([
          
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "date_naissance" => $request->date_naissance,
            "email" => $request->email,
            "password" => $request->password,
            "fieul_id" => $request->fieul_id,
        ]);
    
        $parrains = parrain::all();
        return view("site.parrainage", compact("parrains"));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function show(parrain $parrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function edit(parrain $parrain)
    {  $fieuls = fieul::orderBy("nom","asc")->get();
        return view("site.parrainage",compact("parrain"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parrain $parrain)
    {
        $request->validate([
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            'date_naissance' => 'bail|required|date|',
            "email." => 'bail|required',
            "password" => 'bail|required',
            "fieul_id" => 'bail|required',

        ]);

        $parrain->update(
            [ 
                  
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "date_naissance" => $request->date_naissance,
            "email" => $request->email,
            "password" => $request->password,
            "fieul_id" => $request->fieul_id,
            ]
        );
        $parrains = parrain::all();
        return redirect(route("parrain.index")); 
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function destroy(parrain $parrain)
    {
        $parrain->delete();

        return redirect(route('parrain.index'));
    }
}
