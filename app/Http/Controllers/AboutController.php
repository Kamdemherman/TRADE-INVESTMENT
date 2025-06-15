<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Histoire;
use App\Models\Strategie;
use App\Models\Activite;
use App\Models\reference;
use App\Models\Gallerie;
use App\Models\Documentation;
use App\Models\Projet;
use App\Models\Valeur;
use App\Models\Vision;
use App\Models\Recompense;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=About::first();
        return view('front.about')->with('about',$about);
    }

    public function Histoire()
    {
        $histoire=Histoire::first();
        return view('front.histoire')->with('histoire',$histoire);
    }

    public function Strategie()
    {
        $strategie=Strategie::first();
        return view('front.strategie')->with('strategie',$strategie);
    }

    public function Vision()
    {
        $vision=Vision::first();
        return view('front.vision')->with('vision',$vision);
    }

    public function Valeur()
    {
        $valeur=Valeur::first();
        return view('front.valeur')->with('valeur',$valeur);
    }

    public function Activite()
    {
        $activite=Activite::all();
        return view('front.activite')->with('activites',$activite);
    }


    public function Reference()
    {
        $referencePage=reference::find(1);
        $reference=reference::where('id','>',1)->orderBy('created_at','desc')->get();
        return view('front.reference')->with('references',$reference)->with('referencePage',$referencePage);
    }

    public function Documentation()
    {
        $documentationPage=Documentation::find(1);
        $documentation=Documentation::where('id','>',1)->get();
        return view('front.documentation')->with('documentations',$documentation)->with('documentationPage',$documentationPage);
    }

    public function Gallerie()
    {
        $gallerie=Gallerie::orderBy('created_at','desc')->paginate(20);
        return view('front.gallerie')->with('galleries',$gallerie);
    }

    public function Recompense()
    {
        $recompense=Recompense::orderBy('created_at','desc')->paginate(20);
        return view('front.recompense')->with('recompenses',$recompense);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    public function editActivite($titre)
    {
        $activite=Activite::where('titre',$titre)->orwhere('titre_en',$titre)->first();
        return view('front.activiteDetail')->with('activite',$activite);
    }

    public function editReference($id)
    {
        $reference=reference::find($id);
        return view('front.referenceDetail')->with('reference',$reference);
    }

    public function editDocumentation($titre)
    {
        $documentation=Documentation::where('titre',$titre)->orwhere('titre_en',$titre)->first();
        return view('front.documentationDetail')->with('documentation',$documentation);
    }

    public function editProjet($id)
    {
        $projet=Projet::find($id);
        $meta_image=$projet->image;
        return view('front.projetDetail')->with('projet',$projet)->with('meta_image',$meta_image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
