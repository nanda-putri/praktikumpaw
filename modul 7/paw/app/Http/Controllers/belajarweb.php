<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajarweb extends Controller
{
    public function home()
    {
    	return view('home',[
    		'title'=>'Home',
    		'judul'=>'Universitas Trunojoyo Madura,Teknik Informatika, and Why Teknik Informatika',
    		'utm'=>'Universitas Trunojoyo Madura',
    		'informatika'=>'Teknik Informatika',
    		'cerita'=>'Cerita Ku Sampai di Teknik Infromatika UTM'
    	]);
    }

    public function about()
    {
    	return view('about',[
    		'title'=>'About',
    		'judul'=>'Nanda Putri Febri Antono'
    	]);
    }

    public function tugas()
    {
    	return view('tugas',[
    	'title' =>'Tugas',
    	'judul' =>'Tugas Pendahuluan Modul 6'
    ]);
    }
}