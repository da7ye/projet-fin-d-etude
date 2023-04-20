<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;



class ReclamationController extends Controller
{
    public function index() {
        // dd('index method called');
        $reclamations = Reclamation::orderBy('contact', 'DESC')->paginate(5);

        return view('reclamations.index',['reclamations' => $reclamations]);
    }

    public function create() {
        return view('reclamations.create');
    }

    public function store(Request $request ) {
        $validator = Validator::make($request->all(),[
            'canal' => 'required',
            'contact' => 'required',
            'typereclamation' => 'required',
            'datesaisie' => 'required',
            'delai_traitement' => 'required',
            'entite_saisie' => 'required',
            'entite_traitement' => 'required',
            'saisie_par' => 'required',
            'etat' => 'required',
            'description' => 'required'

        ]);

        if ( $validator->passes() ) {
            
            $reclamation = Reclamation::create($request->post());

            return redirect()->route('reclamations.index')->with('success', 'Reclamation ajoutez avec success.');

        } else {

            return redirect()->route('reclamations.create')->withErrors($validator)->withInput();
        }
    }
    public function edit(Reclamation $reclamation){

        return view('reclamations.edit',['reclamation' => $reclamation]);

    }

    public function update(Reclamation $reclamation, Request $request){
        $validator = Validator::make($request->all(),[
            'canal' => 'required',
            'contact' => 'required',
            'typereclamation' => 'required',
            'datesaisie' => 'required',
            'delai_traitement' => 'required',
            'entite_saisie' => 'required',
            'entite_traitement' => 'required',
            'saisie_par' => 'required',
            'etat' => 'required',
            'description' => 'required'

        ]);

        if ( $validator->passes() ) {
            

            $reclamation->fill($request->post())->save();

            return redirect()->route('reclamations.index')->with('success','Reclamation ajoutez avec success.');

        } else {

            return redirect()->route('reclamations.edit',$reclamation->id)->withErrors($validator)->withInput();
        }
    }
    public function destroy(Reclamation $reclamation, Request $request) {

        $reclamation->delete();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation supprime avec success.');

    }

    
}