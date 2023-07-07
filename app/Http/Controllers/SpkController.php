<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Member;
use App\Models\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpkController extends Controller
{
    public function show(){
        $data = Kriteria::orderBy('id','asc')->get();
        return view ('/frontend/spk',['title'=>"DSS Form"])->with('data',$data);
    }

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');

        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];

        $produk = Ormawa::get();
        $data = Ormawa::orderby('nor', 'asc')->get();

        $minC1 = Ormawa::min('administrasi');
        $maxC1 = Ormawa::max('administrasi');
        $minC2 = Ormawa::min('keaktifan');
        $maxC2 = Ormawa::max('keaktifan');
        $minC3 = Ormawa::min('proker');
        $maxC3 = Ormawa::max('proker');
        $minC4 = Ormawa::min('jang');
        $maxC4 = Ormawa::max('jang');
        $minC5 = Ormawa::min('kebersihan');
        $maxC5 = Ormawa::max('kebersihan');

        $C1min =[
            'ormawa' => $minC1,
        ];
        $C1max =[
            'ormawa' => $maxC1,
        ];
        $C2min =[
            'ormawa' => $minC2,
        ];
        $C2max =[
            'ormawa' => $maxC2,
        ];
        $C3min =[
            'ormawa' => $minC3,
        ];
        $C3max =[
            'ormawa' => $maxC3,
        ];
        $C4min =[
            'ormawa' => $minC4,
        ];
        $C4max =[
            'ormawa' => $maxC4,
        ];
        $C5min =[
            'ormawa' => $minC5,
        ];
        $C5max =[
            'ormawa' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'ormawa' => $hasil,
        ];

        return view('frontend/spk', ['title' => "DSS Perhitungan"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }

    public function store(Request $request){    
            $id = DB::table('ormawa')->max('id')+1;
            $data = [

                'id'=>$id,
                'nor'=>$request->ormawa,
                'administrasi'=>$request->admin,
                'keaktifan'=>$request->Keaktifan,
                'proker'=>$request->proker,
                'jang'=>$request->jml_ang,
                'kebersihan'=>$request->bersih,
            ];
            Ormawa::create($data);
            return redirect()->to('/spk')->with('success','Berhasil menambahkan data !');
        }
}