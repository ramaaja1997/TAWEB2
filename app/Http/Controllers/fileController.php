<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fileModel;

class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = fileModel::all();
		return view('file',compact('data')); 
	
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new fileModel();
		$data->nama = $request->input('name');
		$file = $request->file('file');
		$ext = $file->getClientOriginalExtension();
		$newName = rand(100000,1001238912).".".$ext;
		$file->move('upload/file',$newName);
		$data->file=$newName;
		$data->save();
		return redirect()->route('file.index')->with('alert-success','Berhasil Menambahkan Data!');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = fileModel::findOrFail($id);
        return view('file_play',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = fileModel::findOrFail($id);
		return view('file_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = fileModel::findOrFail($id);
		$data->nama = $request->input('nama');
		if(empty($request->file('file'))){
			return redirect()->route('file.index')->with('alert-success','File bukan video!');
		}else{
			$file = $request->file('file');
		}

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = fileModel::findOrFail($id);
		if($data->delete()){
			unlink('upload/file/'.$data->file);
		}
		return redirect()->route('file.index')->with('alert-success','Data berhasil dihapus!');
		
    }
}
