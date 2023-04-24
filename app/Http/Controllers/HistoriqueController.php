<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appele;
use App\Models\sms;
use App\Models\internet;
use App\Models\recharge;

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

        $search = request()->query('search');

    if ($search) {
        $sms = Sms::where('num_tel', 'LIKE', '%' . $search . '%')->get();
    } else {
        $sms = collect();
    }

    return view('historiques.sms', compact('sms'));
    }
    public function internet(){
        $search = request()->query('search');

    if ($search) {
        $internets = internet::where('num_tel', 'LIKE', '%' . $search . '%')->get();
    } else {
        $internets = collect();
    }
    return view('historiques.internet', compact('internets'));
}


    public function recharge(){
        $search = request()->query('search');

        if ($search) {
            $recharges = recharge::where('num_tel', 'LIKE', '%' . $search . '%')->get();
        } else {
            $recharges = collect();
        }
        return view('historiques.recharge', compact('recharges'));
    }
    public function service(){
        return view('historiques.service');
    }
}
