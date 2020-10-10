<?php

namespace App\Http\Controllers;

use App\Models\Parcour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ParcourController extends Controller
{

    public function index()
    {
        return view('accueil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $now = new \DateTime();

        $course = new Parcour();

        $course->kilometres = (int)$request->input('kilometres');
        $course->date = $request->input('date');
        $course->parcoursNiv = (int)$request->input('parcoursNiv');
        $course->points_de_passages = $request->input('points_de_passages');
        $course->commentaires = $request->input('commentaires');
        $course->updated_at = $now->format("Y-m-d");
        $course->created_at = $now->format("Y-m-d");


        $course->save();

        return redirect()->route('accueil')->with('success', 'Vos modifications on été apporté avec succés');
    }

    public function liste(){
        $parcours = Parcour::all();
        return view('liste',[
            'parcours'=>$parcours
        ]);
    }
}
