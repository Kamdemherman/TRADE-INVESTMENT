<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contenu;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenu=Contenu::all();
        return view('admin.page.contenu.index')->with('contenus',$contenu);
    }

    public function Add()
    {
        return view('admin.page.contenu.add');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=new Contenu();
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        $cat->video1=$request->video1;
        $cat->video1_en=$request->video1_en;
        $cat->video2=$request->video2;
        $cat->video2_en=$request->video2_en;
        $cat->save();

        if ($cat) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function show(Contenu $contenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Contenu::find($id);
        return view('admin.page.contenu.update')->with('contenu',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Contenu::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        $cat->video1=request('video1');
        $cat->video1_en=request('video1_en');
        $cat->video2=request('video2');
        $cat->video2_en=request('video2_en');
        $cat->save();
        if ($cat) {
            return redirect()->route('administration.contenu')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contenu $contenu)
    {
        $cat=Contenu::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
