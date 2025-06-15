<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Activite::all();
        return view('admin.page.activite.index')->with('activites',$cat);
    }

    public function Add()
    {
        return view('admin.page.activite.add');
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
        $cat=new Activite();
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        $cat->libelle=$request->libelle;
        $cat->libelle_en=$request->libelle_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else{
            $cat->image=null; 
        }

        if (request()->file('video')!=null) {
            $video=request()->file('video');
            $videoName=$video->getClientOriginalName();
            $videoName=time().'_'.$videoName;
            $path=request()->file('video')->storeAs('public/media',$videoName);
            $cat->video=$videoName;
        }else {
            $cat->video=null;
        }
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
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Activite::find($id);
        return view('admin.page.activite.update')->with('activite',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Activite::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
        $cat->libelle=request('libelle');
        $cat->libelle_en=request('libelle_en');
        if (request()->file('image')!=null) {
            if ($cat->image != null) {
                Storage::delete('public/imgs/' .$cat->image);
            }
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else {
            $cat->image=$cat->image;
        }

        if (request()->file('video')!=null) {
            if ($cat->video != null) {
                Storage::delete('public/media/' .$cat->video);
            }
            $video=request()->file('video');
            $videoName=$video->getClientOriginalName();
            $videoName=time().'_'.$videoName;
            $path=request()->file('video')->storeAs('public/media',$videoName);
            $cat->video=$videoName;
        }else {
            $cat->video=$cat->video;
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.activite')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Activite::find($id);
        if ($cat->image != null) {
            Storage::delete('public/imgs/' .$cat->image);
        }
        if ($cat->video != null) {
            Storage::delete('public/media/' .$cat->video);
        }
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
