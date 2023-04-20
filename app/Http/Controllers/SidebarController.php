<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index() {
        return view('welcome');
    }

    function dashboard() {
        return view('dashboard');
    }

    // function offres() {
    //     return view('offres.index');
    // }
    function catalogue() {
        return view('catalogues.index');
    }
    function reclamation() {
        return view('reclamations.index');
    }
    function statistique() {
        return view('statistiques.index');
    }
    function historique() {
        return view('historiques.appel');
    }


}
