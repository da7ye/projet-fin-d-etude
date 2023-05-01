<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;



class ReclamationController extends Controller
{
    public function index() {
        $search =request()->query('search');

        if(request()->query('search')){
            $reclamations = Reclamation::with('user')->where('contact', 'LIKE' , "%{$search}%")->paginate(5);
        } else{
            $reclamations = Reclamation::with('user')->orderBy('id', 'DESC')->paginate(4);
        }

        return view('reclamations.index', compact('reclamations'));
    }

    public function create() {
        return view('reclamations.create');
    }
    public function store(Request $request ) {
        $validator = Validator::make($request->all(),[
            'canal' => 'required',
            'contact' => 'required',
            'typereclamation' => 'required',
            // 'datesaisie' => 'required',
            'delai_traitement' => 'required',
            'entite_traitement' => 'required',
            // 'saisie_par' => 'required',
            'etat' => 'required',
            'description' => 'required'
    
        ]);
    
        if ( $validator->passes() ) {
            
            // Add the user_id to the request data
            $data = $request->post();
            $data['user_id'] = auth()->user()->id;
    
            $reclamation = Reclamation::create($data);
    
            return redirect()->route('reclamations.index')->with('success', 'Reclamation ajoutez avec success.');
    
        } else {
    
            return redirect()->route('reclamations.create')->withErrors($validator)->withInput();
        }
    }
    

    public function edit(Reclamation $reclamation){

        return view('reclamations.edit',['reclamation' => $reclamation]);

    }

    public function show(Reclamation $reclamation){

        return view('reclamations.show',['reclamation' => $reclamation]);

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