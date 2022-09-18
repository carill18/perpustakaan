<?php

namespace App\Http\Controllers;
use App\Models\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('index',[
            "buku" => Buku::all()
        ]);
    }

    public function show($id)
    {
        return view('show',[
            "buku" => Buku::find($id)
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jenis_buku' => 'required',
            'jumlah_buku' => 'required'
        ]);

        Buku::create($validateData);

        return redirect('/')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('edit',[
            "buku" => Buku::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jenis_buku' => 'required',
            'jumlah_buku' => 'required'
        ]);

        Buku::where('id', $id)
        ->update($validateData);

        return redirect('/')->with('success', 'Data buku berhasil diubah!');
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/')->with('success', 'Data buku berhasil dihapus!');
    }
}
