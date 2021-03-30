<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::latest()->paginate(5);

        return view('barangs.index',compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required'
        ]);

        barang::create($request->all());

        return redirect()->route('barang.index')
                        ->with('success','barang created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barangs.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barangs.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required'
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')
                        ->with('success','barang updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
                        ->with('success','barang deleted successfully');
   }
   public function cari(Request $request)
   {
    $barang = barang::when($request->keyword, function ($query) use ($request) {
        $query->where('kode_barang', 'like', "%{$request->keyword}%")
            ->orWhere('nama_barang', 'like', "%{$request->keyword}%")
            ->orWhere('kategori_barang', 'like', "%{$request->keyword}%");
    })->paginate();

    $barang->appends($request->only('keyword'));

    return view('barangs.cari',compact('barang'));
   }
}
