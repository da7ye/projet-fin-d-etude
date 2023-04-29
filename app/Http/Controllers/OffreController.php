<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class OffreController extends Controller
{
    public function index() {
        $search =request()->query('search');

        if(request()->query('search')){
            $offres = Offre::with('user')->where('nomoffre', 'LIKE' , "%{$search}%")->paginate(5);
        } else{
            $offres = Offre::with('user')->orderBy('id', 'DESC')->paginate(5);
        }
            return view('offres.index', compact('offres'));
            


    }

    public function create() {
        return view('offres.create');
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'nomoffre' => 'required',
            'dtdebut' => 'required',
            'dtfin' => 'required',
            'etat' => 'required',
            'description' => 'required'
        ]);

        if ($validator->passes() ){
                                    // Save data here

                // 1er methode to add offre 
            // $offre = new Offre();
            // $offre->nomoffre = $request->nomoffre;
            // $offre->dtdebut = $request->dtdebut;
            // $offre->dtfin = $request->dtfin;
            // $offre->etat = $request->etat;
            // $offre->description = $request->description;
            // $offre->save();

                // 2eme methode
            // $offre = new Offre;
            // $offre->fill($request->post())->save();

                // 3eme methode:
            $offre = Offre::create($request->post());
            
            return redirect()->route('offres')->with('success',"L'offre a été ajouté avec succcès.");

        } else {
            //return with errors
            return redirect()->route('offres.create')->withErrors($validator)->withInput();
        }
    }

    public function edit(Offre $offre){
        // $offre = Offre::findOrFail($id);
        return view('offres.edit',['offre' => $offre]);
    }

    public function update(Offre $offre, Request $request){
        $validator = validator::make($request->all(),[
            'nomoffre' => 'required',
            'dtdebut' => 'required',
            'dtfin' => 'required',
            'etat' => 'required',
            'description' => 'required'
        ]);

        if ($validator->passes() ){
            // Save data here

            // $offre = Offre::find($id);
            // $offre->nomoffre = $request->nomoffre;
            // $offre->dtdebut = $request->dtdebut;
            // $offre->dtfin = $request->dtfin;
            // $offre->etat = $request->etat;
            // $offre->description = $request->description;
            // $offre->save();

            $offre->fill($request->post())->save();

            return redirect()->route('offres')->with('success',"L'offre a été modifier avec succcès.");

        } else {
            //return with errors
            return redirect()->route('offres.edit',$offre->id)->withErrors($validator)->withInput();
        }
    }

    public function destroy(Offre $offre, Request $request) {
        // $offre = Offre::findOrFail($id);
        $offre->delete();


        return redirect()->route('offres')->with('success',"L'offre a été supprimé avec succcès.");
    }
}
