<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contenu;
use App\Models\MotDirecteur;
use App\Models\News;
use App\Models\Partenaire;
use App\Models\Projet;
use App\Models\Slider;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mot=MotDirecteur::all();
         $slide=Slider::all();
         $partenaire=Partenaire::all();
         $projet=Projet::orderBy('created_at','desc')->get();
         $contenu=Contenu::first();
        $news=News::orderBy('created_at','desc')->get();
        //->with('about',$ab)->with('services',$cat)->with('shops',$shops)->with('news',$news)
        return view('menu')->with('slider',$slide)->with('mot',$mot)->with('partenaires',$partenaire)
                           ->with('projets',$projet)->with('news',$news)->with('contenu',$contenu);
    }

    public function MotDirecteur()
    {
        $mot=MotDirecteur::first();
        return view('front.motDirecteur')->with('mot',$mot);
    }
    public function test()
    {
        dd('aaaaaaaaaaa');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
