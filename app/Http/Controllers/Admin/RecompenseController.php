<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recompense;
use Illuminate\Http\Request;

class RecompenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recompense=Recompense::orderBy('created_at','desc')->paginate(10);
        return view('admin.page.recompense.index')->with('recompenses',$recompense);
    }

    public function Add()
    {
        return view('admin.page.recompense.add');
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
        $cat=new Recompense();
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        if (request()->file('image')!=null) {
            $img=request()->file('image');
            $imageName=$img->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $cat->image=$imageName;
        }else{
            $cat->image=null; 
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
     * @param  \App\Models\Recompense  $recompense
     * @return \Illuminate\Http\Response
     */
    public function show(Recompense $recompense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recompense  $recompense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Recompense::find($id);
        return view('admin.page.recompense.update')->with('recompense',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recompense  $recompense
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Recompense::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
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

        $cat->save();

        if ($cat) {
            return redirect()->route('administration.recompense')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recompense  $recompense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Recompense::find($id);
        if ($cat->image != null) {
            Storage::delete('public/imgs/' .$cat->image);
        }
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
