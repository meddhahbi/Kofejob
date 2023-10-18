<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condidat;
use Illuminate\Support\Facades\Validator;

class CondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $condidats = Condidat::all();
    return view('Front.Condidat.index', compact('condidats'));
}

public function indexx()
{
    $condidatsAdmin = Condidat::all();
    return view('Admin.Condidat.index', compact('condidatsAdmin'));
}

public function create()
{
    return view('Front.Condidat.create');
}

public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:condidat,email|max:255',
            'lettreMotivation' => 'required|string',
        ]);

        Condidat::create($request->all());

        return redirect()->route('Front.Condidat.index');
    }

public function show($id)
{
    $condidatsAdmin = Condidat::findOrFail($id);
    return view('Admin.Condidat.show', compact('condidatsAdmin'));
}

public function edit($id)
{
    $condidat = Condidat::findOrFail($id);
    return view('Front.Condidat.edit', compact('condidat'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:condidat,email,'.$id,
        'lettreMotivation' => 'required|string',
    ]);

    $condidat = Condidat::findOrFail($id);
    $condidat->update($request->all());

    return redirect()->route('Front.Condidat.index');
}

public function destroy($id)
{
    $condidat = Condidat::findOrFail($id);
    $condidat->delete();

    return redirect()->route('Front.Condidat.index');
}

public function destroyy($id)
{
    $condidat = Condidat::findOrFail($id);
    $condidat->delete();

    return redirect()->route('Admin.Condidat.index');
}

}
