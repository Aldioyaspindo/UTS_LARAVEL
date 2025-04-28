<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;


class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donasis = Donasi::latest()->paginate(10);
        return view('donasi.index', compact('donasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_donatur'       => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'nominal'            => 'required|integer|min:1000',
            'metode_pembayaran'  => 'required|in:BRI,BNI,MANDIRI,DANA,BCA,OVO,GOPAY',
            'tanggal_donasi'     => 'required|date',
            'dukungan_doa'       => 'nullable|string',
            'status'             => 'required|in:menunggu konfirmasi,dikonfirmasi,batal',
        ]);

        Donasi::create($validatedData);

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.show', compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_donatur'       => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'nominal'            => 'required|integer|min:1000',
            'metode_pembayaran'  => 'required|in:BRI,BNI,MANDIRI,DANA,BCA,OVO,GOPAY',
            'tanggal_donasi'     => 'required|date',
            'dukungan_doa'       => 'nullable|string',
            'status'             => 'required|in:menunggu konfirmasi,dikonfirmasi,batal',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->update($validatedData);

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return redirect()->route('donasi.index')->with('success', 'Data donasi berhasil dihapus.');
    }

    public function trashed()
    {
        $donasis = Donasi::onlyTrashed()->paginate(10); // Mengambil hanya data yang soft deleted
        return view('donasi.trashed', compact('donasis'));
    }

    public function restore($id)
    {
        $donasi = Donasi::withTrashed()->findOrFail($id);
        $donasi->restore(); // Pulihkan donasi
    
        return redirect()->route('donasi.trashed')->with('success', 'Donasi berhasil dipulihkan');
    }
    
}
