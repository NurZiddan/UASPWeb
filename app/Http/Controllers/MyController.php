<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;

class MyController extends Controller
{
    public function ormawatampil(){
        $datauser = Member::orderby('id_user','nama')->paginate(5);
        return view('halaman/view_user',['user'=>$datauser]);
    }

    //method menambah data user
    public function usertambah(Request $request){
        $this->validate($request,[
            'id_user' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'ormawa' => 'required'
        ]);

        Member::create([
            'id_user' => $request->id_user,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'ormawa' => $request->ormawa
        ]);

        return redirect('/user');
    }

    public function userhapus($id_user){
        $datauser=Member::find($id_user);
        $datauser->delete();

        return redirect()->back();
    }

    public function useredit($id_user,Request $request){
        $this->validate($request, [
            'id_user' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'ormawa' => 'required'
        ]);

        $id_user = Member::find($id_user);
        $id_user->nim = $request->nim;
        $id_user->nama = $request->nama;
        $id_user->prodi = $request->prodi;
        $id_user->ormawa = $request->ormawa;

        $id_user->save();

        return redirect()->back();
    }
}
