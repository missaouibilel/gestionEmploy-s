<?php

namespace App\Http\Controllers;

use App\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes=Employe::all();
        return view('employes.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prénom' => 'required',
            'date_naissance'=> 'required',
            'CIN'=>'required',
             'tel'=>'required',
             'salaire'=>'required',
             'type_contrat'=>'required'
        ]);

        Employe::create($request->all());

        return redirect()->route('employe.index')
                        ->with('success','employé créé avec succés.');
    }

    /**
     * Display the specified resource.
     *
     *@param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('employes.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employes.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'nom' => 'required',
            'prénom' => 'required',
            'date_naissance'=> 'required',
            'CIN'=>'required',
             'tel'=>'required',
             'salaire'=>'required',
             'type_contrat'=>'required'
        ]);
        $employe->update($request->all());
        return redirect()->route('employe.index')
                ->with('success','employé Mis à jour avec succés');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employe.index')
                ->with('success','Employé Supprimé avec succès');
    }
}
