<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class mahasiswacontroller extends Controller
{
    public function tampil()
    {
    	$mhs=mahasiswa::all();
    	return view('tampil', ['title'=>'Tampil', 'judul'=>'Table Mahasiswa'] ,compact('mhs'));
    	// dd($post);
    }

    public function create()
    {
    	return view('create',  ['title'=>'Create', 'judul'=>'Create Data Mahasiswa']);
    }

    public function proses(Request $request)
    {
    	mahasiswa::create($request->except(['_token','submit']));
    	return redirect('insert');
    }

    public function edit($id)
    {
    	$mhs = mahasiswa::find($id);
    	return view('edit',['title'=>'Edit Mahasiswa', 'judul'=>'Edit Data Mahasiswa'], compact('mhs'));
    }

    public function update($id, Request $request)
    {
    	$mhs = mahasiswa::find($id);
    	$mhs -> update($request->except(['_token','submit']));
    	return redirect('insert');
    }

     public function editnilai($id)
    {
    	$mhs = mahasiswa::find($id);
    	return view('editnilai',  ['title'=>'Edit Nilai', 'judul'=>'Edit Nilai Mahasiswa'], compact('mhs'));
    }

    public function updatenilai($id, Request $request)
    {
    	$mhs = mahasiswa::find($id);
    	$mhs -> update($request->except(['_token','submit']));
    	return redirect('insert');
    }

    public function delete($id)
    {
    	$mhs = mahasiswa::find($id);
    	$mhs->delete();
    	return redirect('insert');
    }
    // public function destroy($id)
    // {
    // 	$mhs = mahasiswa::find($id);
    // 	$mhs->delete();
    // 	return redirect('insert');
    // }

    public function show(Request $request, $nim)
    {
    	// dd($nim);
        $mhs=mahasiswa::where('nim','=',$nim)->get();
        return view('tampil', ['title'=>'Tampil', 'judul'=>'Table Mahasiswa'] ,compact('mhs'));
    	// return view('tampil', ['title'=>'Tampil', 'judul'=>'Table Mahasiswa'] ,compact('post'));
    }


}
