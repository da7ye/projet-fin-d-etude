<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appele;

class HistoriqueController extends Controller
{
    public function appel()
{
    $search = request()->query('search');

    if ($search) {
        $appeles = Appele::where('num_tel', 'LIKE', '%' . $search . '%')->get();
    } else {
        $appeles = collect();
    }

    return view('historiques.appel', compact('appeles'));
}

    public function sms(){
        return view('historiques.sms');
    }
    public function internet(){
        return view('historiques.internet');
    }
    public function recharge(){
        return view('historiques.recharge');
    }
    public function service(){
        return view('historiques.service');
    }
}
