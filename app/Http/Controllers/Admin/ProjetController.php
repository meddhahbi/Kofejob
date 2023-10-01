<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projets=Projet::all();
        return view('Admin.Projet.index')->with('projets',$projets);
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
        $input=$request->all();
        Projet::create($input);
        return redirect('projet')->with('status', 'Projet Addedd!');

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
        $projet=Projet::find($id);
        return view('Admin.Projet.index')->with('projets', $projet);

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
        $projet = Projet::find($id);
        return response()->json([
            'status'=>200,
            'projet'=>$projet,
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->input('proj_id');
        $projet=Projet::find($id);
       $projet->title=$request->input('title');
        $projet->budget=$request->input('budget');
        $projet->progress=$request->input('progress');
        $projet->due_date=$request->input('due_date');
        $projet->start_date=$request->input('start_date');
        $projet->company=$request->input('company');
        $projet->technology=$request->input('technology');
        $projet->update();
        return redirect()->back()->with('status', 'projet Updated!');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=$request->input('delete_id');
        $projet=Projet::find($id);
        $projet->delete();
        return redirect()->back()->with('status', 'Projet deleted!');

    }
    public function indexFront()
    {
        //
        $projets=Projet::all();
        return view('Front.Project.projet')->with('projets',$projets);
    }
}
