<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrasiController extends Controller
{
    public function index(){
        // $key = $request->key; 
        // $jumlahbaris = 10;
        // if (strlen($key)) {
        //     $data = Member::where('nim','like',"%$key%")
        //     ->orWhere('nama','like',"%$key%")
        //     ->orWhere('Prodi','like',"%$key%")
        //     ->orWhere('Semester','like',"%$key%")
        //     ->orWhere('Ormawa','like',"%$key%")
        //     ->paginate($jumlahbaris);
        // } else {
        // $data = Member::orderBy('nim','desc')->paginate($jumlahbaris);
        // }
        return view ('/frontend/rana9',['data'=>Member::all()]);
    }

    public function create(){
        //
    }

    public function store(Request $request){

    //     $request->validate([
    //         'nim'=>'required|numeric|unique:peserta,nim',
    //         'nama'=>'required',
    //         'prodi'=>'required',
    //         'semester'=>'required',
    //         'ormawa'=>'required',
    //     ],[
    //         'nim.required'=>'Silahkan masukkan Nim ',
    //         'nim.numeric'=>'Harus berupa Angka! ',
    //         'nim.unique'=>'Nim sudah terdaftar ',
    //         'nama.required'=>'Silahkan Masukkan Nama kamu ',
    //         'prodi.required'=>'Silahkan isi Prodi Kamu ',
    //         'semester.required'=>'Silahkan isi Semester Kamu',
    //         'ormawa.required'=>'Silahkan isi nama Ormawa',
    //     ]
    // );

        $id = DB::table('members')->max('id')+1;
        $data = [
            
            'id'=>$id,
            'nim'=>$request->nim,
            'name'=>$request->name,
            'prodi'=>$request->prodi,
            'semester'=>$request->semester,
            'ormawa'=>$request->ormawa,
        ];
        Member::create($data);
        return redirect()->to('/rana9')->with('success','Berhasil menambahkan data !');
        
        // $id = DB::table('member')->max('id')+1;
        // $data = [
        //     'id'=>$id,
        //     'nim'=>$request->nim,
        //     'name'=>$request->name,
        //     'semester'=>$request->semester,
        //     'prodi'=>$request->prodi,
        //     'ormawa'=>$request->ormawa
        // ];

        // member::create($data);

        // return redirect()->to('/rana9')->with('Success','Sukses Menambahkan Member');
    }

    public function show(String $id){
        //
    }
 
    public function edit($id, Request $request){
        $data = Member::find($id);
        return view('frontend/rana9-edit')->with('data',$data);
    }

    public function update(Request $request, $id){

        $id = DB::table('members')->max('id')+1;
        $data = [
            'id'=>$id,
            'nim'=>$request->nim,
            'name'=>$request->name,
            'semester'=>$request->semester,
            'prodi'=>$request->prodi,
            'ormawa'=>$request->ormawa
        ];

        Member::where('id',$id)->update($data);
        return redirect()->to('/rana9')->with('Success','Sukses Mengubah Data');
    }

    public function destroy($id){
        Member::where('id',$id)->delete();
        return redirect()->to('rana9')->with('Success','Sukses Menghapus Data');
    }
}