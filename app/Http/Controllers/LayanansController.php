<?php

namespace App\Http\Controllers;

use App\Models\Layanans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayanansController extends Controller
{
    public function index(Request $request)
    {
        $layanans = Layanans::when($request->search, function ($query) use ($request) {
            $query->where('namalayanan', 'like', '%' . $request->search . '%')
                ->orWhere('deskripsilayanan', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('admin.layanan.kelolalayanan', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.tambahlayanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namalayanan' => 'required',
            'deskripsilayanan' => 'required',
        ]);

        Layanans::create([
            'namalayanan' => $request->namalayanan,
            'deskripsilayanan' => $request->deskripsilayanan,
        ]);

        return redirect()->route('layanan')->with('success', 'Layanan berhasil ditambah!');
    }

    public function show($id)
    {
        $layanans = Layanans::findOrFail($id);
        return view('admin.layanan.detaillayanan', compact('layanans'));
    }

    public function edit($id)
    {
        $layanans = Layanans::findOrFail($id);
        return view('admin.layanan.editlayanan', compact('layanans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namalayanan' => 'required',
            'deskripsilayanan' => 'required',
        ]);

        $layanans = Layanans::findOrFail($id);

        $layanans->namalayanan = $request->namalayanan;
        $layanans->deskripsilayanan = $request->deskripsilayanan;
        $layanans->save();

        return redirect()->route('layanan')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $layanans = Layanans::findOrFail($id);
        $layanans->delete();

        return redirect()->route('layanan')->with('success', 'Layanan berhasil dihapus!');
    }
}
