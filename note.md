<!-- Reclamation controller -->
<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ReclamationController extends Controller
{
    public function index() {
        // dd('index method called');
        $reclamations = Reclamation::orderBy('contact', 'DESC')->get();

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
            
            $reclamation = new Reclamation();
            $reclamation->canal = $request->canal;
            $reclamation->contact = $request->contact;
            $reclamation->typereclamation = $request->typereclamation;
            $reclamation->datesaisie = $request->datesaisie;
            $reclamation->delai_traitement = $request->delai_traitement;
            $reclamation->entite_saisie = $request->entite_saisie;
            $reclamation->entite_traitement = $request->entite_traitement;
            $reclamation->saisie_par = $request->saisie_par;
            $reclamation->etat = $request->etat;
            $reclamation->description = $request->description;
            $reclamation->save();

            $request->session()->flash('success', 'Reclamation ajoutez avec success.');

            return redirect()->route('reclamations.index');

        } else {

            return redirect()->route('reclamations.create')->withErrors($validator)->withInput();
        }
    }
}


<!-- migration table:  -->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->integer('contact');
            $table->enum('canal', ['appelle', 'verbale']);
            $table->enum('typereclamation', ['SAV', 'RENSEIGNEMENT']);
            $table->date('datesaisie');
            $table->string('delai_traitement');
            $table->enum('entite_saisie', ['Centre IN', 'Agence TVZ', 'Centre SMSC', 'Agence SKK', 'Centre HLR', 'Agence ARAFAT']);
            $table->enum('entite_traitement', ['Centre IN', 'Agence TVZ', 'Centre SMSC', 'Agence SKK', 'Centre HLR', 'Agence ARAFAT']);
            $table->string('saisie_par');
            $table->enum('etat', ['En cours', 'traité']);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
};



<!-- Reclamation. index: -->
<x-app-layout>
    <div class="bg-green-200 my-3 py-3">
        <div class="container">
            <div class="h3 text-center text-blue">Gestion des Reclamation</div>
        </div>
    </div>

    <div class="container py-2">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">reclamation</div>
            <div class="">
                <a href="{{ route('reclamations.create') }}" class="btn btn-primary">Ajouter un Reclamation</a>
            </div>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>contact</th>
                        <th>Canal</th>
                        <th>Type Reclamation</th>
                        <th>date saisie</th>
                        <th>Delaie traitement</th>
                        <th>Entite de saisie</th>
                        <th>Entite de traitement</th>
                        <th>Saisie Par</th>
                        <th>Etat</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>

                    @if($reclamations->isNotEmpty())
                    @foreach ($reclamations as $reclamation)
                    
                    <tr>
                        <td>{{ $reclamation->contact }}</td>
                        <td>{{ $reclamation->canal }}</td>
                        <td>{{ $reclamation->typereclamation }}</td>
                        <td>{{ $reclamation->datesaisie }}</td>
                        <td>{{ $reclamation->delai_traitement }}</td>
                        <td>{{ $reclamation->entite_saisie }}</td>
                        <td>{{ $reclamation->entite_traitement }}</td>
                        <td>{{ $reclamation->saisie_par }}</td>
                        <td>{{ $reclamation->etat }}</td>
                        <td>{{ $reclamation->description }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6">Record not found</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $reclamations->links()}}
        </div>
    </div>
</x-app-layout>