<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\charaModel;
class charaController extends Controller
{
    public function index(){
		$data = charaModel::all();
	return view('chara',compact('data')); 
	}
	
	public function create()
    {
        return view('chara_create');
    }
	
	public function store(Request $request)
    {
		$data = new charaModel();
		$data->nama = $request->nama;
		$data->age = $request->age;
		$data->talent = $request->talent;
		$chara = $request->file('chara');
		$ext = $chara->getClientOriginalExtension();
		$newName = rand(100000,1001238912).".".$ext;
		$chara->move('upload/chara',$newName);
		$data->chara=$newName;
		$data->save();
		return redirect()->route('chara.index')->with('alert-success','Berhasil Menambahkan Data!');
	}
	
	public function edit($id)
    {
        $data = charaModel::where('id',$id)->get();
        return view('chara_edit',compact('data'));
    }
	
	public function update(Request $request, $id)
    {
        $data = chara_editModel::findOrFail($id);
		$data->nama = $request->nama;
		$data->age = $request->age;
		$data->talent = $request->talent;
		if(empty($request->file('chara'))){
			$data->chara = $data->chara;
		}else{
			unlink('upload/chara/'.$data->chara); //menghapus chara lama
			$chara = $request->chara('chara');
			$ext = $chara->getClientOriginalExtension();
			$newName = rand(100000,1001238912).".".$ext;
			$chara->move('upload/chara',$newName);
			$data->chara = $newName;
		}
		$data->save();
		return redirect()->route('chara.index')->with('alert-success','Data berhasil diubah!');
    }
	
	public function destroy($id)
    {
        $data = charaModel::where('id',$id)->first();
		$data->delete();
		return redirect()->route('chara.index')->with('alert-success','Data berhasil dihapus!');
    }
}
