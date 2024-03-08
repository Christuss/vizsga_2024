<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesekController extends Controller
{
    public function all() {
        $bejegyzesek = DB::table('bejegyzeseks')->get();
        return $bejegyzesek;
    }

    public function osztaly_id($osztaly_id){
        $bejegyzesek = DB::table('bejegyzeseks as b')
        ->join('tevekenysegs as t', 'b.tevekenyseg_id', '=', 'b.tevekenyseg_id')
        ->select('t.tevekenyseg_id','t.tevekenyseg_nev', 't.pontszam', 'b.osztaly_id', 'b.allapot')
        ->where('osztaly_id', '=', $osztaly_id)
        ->get();
        return $bejegyzesek;
    }

    public function bejegyzes(Request $request) {
        $bejegyzesek = new Bejegyzesek();
        $bejegyzesek->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzesek->osztaly_id = $request->osztaly_id;
        $bejegyzesek->allapot = $request->allapot;
        $bejegyzesek->save();
    }
}
