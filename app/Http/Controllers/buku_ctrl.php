<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\buku;

class buku_ctrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datas = buku::all();
        // return $datas;
        return view('buku.index', 
            [
                'user' => $datas
            ]); 
    }

    public function create()
    {
        return view('buku.create'); 
    }

    public function show($id)
    {
        $data = buku::find($id);
        return view('buku.show', 
            [
                'user' => $data
            ]); 
    }

    public function destroy($id)
    {
        $data = buku::where('id',$id)
                ->delete();
        return redirect('/dashboard'); 
    }

    public function edit($id)
    {
        $data = buku::where('id',$id)
                ->first();
        return view('buku.edit',['data'=> $data]); 
    }

    public function update(Request $request, $id)
    {
        $buku = buku::find($id);
        $buku->BUKU_Name        = $request['txtNamaBuku'];
        $buku->BUKU_Pengarang   = $request['txtPengarangBuku'];
        $buku->BUKU_Penerbit    = $request['txtPenerbitBuku'];
        $buku->BUKU_Harga       = $request['txtHargaBuku'];
        $buku->update();
        return redirect('/dashboard'); 
    }

    public function store(Request $request)
    {
    	$buku = new buku();
        $buku->BUKU_Name        = $request['txtNamaBuku'];
        $buku->BUKU_Pengarang   = $request['txtPengarangBuku'];
        $buku->BUKU_Penerbit    = $request['txtPenerbitBuku'];
        $buku->BUKU_Harga       = $request['txtHargaBuku'];
        $buku->save();
        return redirect('/dashboard');
    }
}
