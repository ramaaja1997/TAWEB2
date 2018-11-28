<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galleryModel;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = galleryModel::all();
		return view('gallery',compact('data')); 
	
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new galleryModel();
		$data->nama = $request->input('name');
		$gallery = $request->file('gallery');
		$ext = $gallery->getClientOriginalExtension();
		$newName = rand(100000,1001238912).".".$ext;
		$gallery->move('upload/gallery',$newName);
		$data->gallery=$newName;
		$data->save();
		return redirect()->route('gallery.index')->with('alert-success','Berhasil Menambahkan Data!');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = galleryModel::findOrFail($id);
		return view('gallery_edit',compact('data'));
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
        $data = galleryModel::findOrFail($id);
		$data->nama = $request->input('nama');
		if(empty($request->file('gallery'))){
			$data->gallery = $data->gallery;
		}else{
			unlink('upload/gallery/'.$data->gallery); //menghapus gallery lama
			$gallery = $request->gallery('gallery');
			$ext = $gallery->getClientOriginalExtension();
			$newName = rand(100000,1001238912).".".$ext;
			$gallery->move('upload/gallery',$newName);
			$data->gallery = $newName;
		}
		$data->save();
		return redirect()->route('gallery.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = galleryModel::findOrFail($id);
		if($data->delete()){
			unlink('upload/gallery/'.$data->gallery);
		}
		return redirect()->route('gallery.index')->with('alert-success','Data berhasil dihapus!');
		
    }
}
