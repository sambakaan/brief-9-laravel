<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Quartier;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class EntrepriseController extends Controller
{



    public function index () {
        return view('entreprises.index', [
            'entreprises' => Entreprise::with('localite')->get()
        ]);
    }

    public function create() {
        $quartiers = Quartier::all();
        return view('entreprises.create',[
            'quartiers' => $quartiers
        ]);
    }

    public function store(Request $request) {

        //TODO: Refactoring cette partie de code
        $inputsData = $request->all();
        $inputsData['dispositifFormation'] = $request->has('dispositifFormation') ? true : false;
        $inputsData['organigramme'] = $request->has('organigramme') ? true : false;
        $inputsData['contrat'] = $request->has('contrat') ? true : false;

        Entreprise::create($inputsData);
        return redirect()->route('entreprises.index');
    }

    public function show(int $id){
        $entreprise = Entreprise::find($id);
        return view('entreprises.show',[
            'entreprise' => $entreprise
        ]);

    }
}
