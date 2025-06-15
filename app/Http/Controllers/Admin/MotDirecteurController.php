<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MotDirecteur;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MotDirecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motDirecteur=MotDirecteur::all();
        return view('admin.page.motDirecteur.index')->with('mot',$motDirecteur);
    }

    public function Add()
    {
        return view('admin.page.motDirecteur.add');
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
        $motDirecteur=new MotDirecteur();
        $motDirecteur->titre=$request->titre;
        $motDirecteur->titre_en=$request->titre_en;
        $motDirecteur->short=$request->short;
        $motDirecteur->short_en=$request->short_en;
        $motDirecteur->description=$request->description;
        $motDirecteur->description_en=$request->description_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $motDirecteur->image=$imageName;
        }else {
            $motDirecteur->image=null;
        }
        $motDirecteur->save();

        if ($motDirecteur) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MotDirecteur  $motDirecteur
     * @return \Illuminate\Http\Response
     */
    public function show(MotDirecteur $motDirecteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MotDirecteur  $motDirecteur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motDirecteur=MotDirecteur::find($id);
        return view('admin.page.motDirecteur.update')->with('mot',$motDirecteur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MotDirecteur  $motDirecteur
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $motDirecteur=MotDirecteur::find($id);
        $motDirecteur->titre=request('titre');
        $motDirecteur->titre_en=request('titre_en');
        $motDirecteur->short=request('short');
        $motDirecteur->short_en=request('short_en');
        $motDirecteur->description=request('description');
        $motDirecteur->description_en=request('description_en');
        if (request()->file('image')!=null) {
            if ($motDirecteur->image != null) {
                Storage::delete('public/imgs/' .$motDirecteur->image);
            }
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $motDirecteur->image=$imageName;
        }else {
            $motDirecteur->image=$motDirecteur->image;
        }
        $motDirecteur->save();

        if ($motDirecteur) {
            return redirect()->route('administration.mot-directeur')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MotDirecteur  $motDirecteur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motDirecteur=MotDirecteur::find($id);
        if ($motDirecteur->image != null) {
            Storage::delete('public/imgs/' .$motDirecteur->image);
        }
        $motDirecteur->delete();
        if ($motDirecteur){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
