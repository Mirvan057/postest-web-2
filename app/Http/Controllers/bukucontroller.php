<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posting = DB::table('buku')->get();
        return view('book',['posting'=> $posting]);

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("customer");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('beli')->insert([
            'judul'=>$request->judul,
            'penulis' => $request->penulis,
            'harga'=> $request->harga,
            'link'=> "",
            'pembeli' => $request->nama,
            'telp'=> $request->telp,
            'alamat'=> $request->alamat
        ]);

        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**f
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
