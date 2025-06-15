<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Documentation::all();
        return view('admin.page.documentation.index')->with('documentations',$cat);
    }

    public function Add()
    {
        return view('admin.page.documentation.add');
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
        $cat=new Documentation();
        $cat->titre=$request->titre;
        $cat->titre_en=$request->titre_en;
        if (request()->file('pdf')!=null) {
            $pdf=request()->file('pdf');
            $pdfName=$pdf->getClientOriginalName();
            $pdfName=time().'_'.$pdfName;
            $path=request()->file('pdf')->storeAs('public/pdfs',$pdfName);
            $cat->pdf=$pdfName;
        }else{
            $cat->pdf=null; 
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
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function show(Documentation $documentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Documentation::find($id);
        return view('admin.page.documentation.update')->with('documentation',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cat=Documentation::find($id);
        $cat->titre=request('titre');
        $cat->titre_en=request('titre_en');
        if (request()->file('pdf')!=null) {
            $pdf=request()->file('pdf');
            $pdfName=$pdf->getClientOriginalName();
            $pdfName=time().'_'.$pdfName;
            $path=request()->file('pdf')->storeAs('public/pdfs',$pdfName);
            $cat->pdf=$pdfName;
        }else{
            $cat->pdf=$cat->pdf; 
        }
        $cat->save();

        if ($cat) {
            return redirect()->route('administration.documentation')->with('success','Modifier avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Documentation::find($id);
        $cat->delete();
        if ($cat){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
