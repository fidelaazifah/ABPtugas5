<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Fidela";
        $data["asal"]="Bandung";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Fidela", "asal" => "Bandung"),
            array("nama" => "Rofiah", "asal" => "Solo"),
            array("nama" => "Gloria", "asal" => "Pekanbaru")
        );
        return view('v_latihan2', $data);
    }
}
