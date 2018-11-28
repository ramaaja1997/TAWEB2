<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotesModel;
class quotesController extends Controller
{
    public function index(){
		$data = quotesModel::all();
	return view('quotes',compact('data')); 
	}
	
	public function create()
    {
        return view('quotes_create');
    }
	
	public function store(Request $request)
    {
		$data = new quotesModel();
		$data->nama = $request->nama;
		$data->chara = $request->chara;
		$data->quotes = $request->quotes;
		$data->save();
		return redirect()->route('quotes.index')->with('alert-success','Berhasil Menambahkan Data!');
	}
	
	public function edit($id)
    {
        $data = quotesModel::where('id',$id)->get();
        return view('quotes_edit',compact('data'));
    }
	
	public function update(Request $request, $id)
    {
        $data = quotesModel::where('id',$id)->first();
		$data->nama = $request->nama;
		$data->chara = $request->chara;
		$data->quotes = $request->quotes;
		$data->save();
		return redirect()->route('quotes.index')->with('alert-success','Data berhasil diubah!');
    }
	
	public function destroy($id)
    {
        $data = quotesModel::where('id',$id)->first();
		$data->delete();
		return redirect()->route('quotes.index')->with('alert-success','Data berhasil dihapus!');
    }
}
