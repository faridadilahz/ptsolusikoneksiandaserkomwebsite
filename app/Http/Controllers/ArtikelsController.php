<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $artikels = Artikels::when($request->search, function ($query) use ($request) {
            $query->where('judulartikel', 'like', '%' . $request->search . '%')
                ->orWhere('deskripsiartikel', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('admin.artikel.kelolaartikel', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.postingartikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulartikel' => 'required',
            'deskripsiartikel' => 'required',
            'gambarartikel' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5012',
        ]);

        $imagePath = null;

        if ($request->hasFile('gambarartikel')) {
            $imagePath = $request->file('gambarartikel')->store('artikel', 'public');
        }

        Artikels::create([
            'judulartikel' => $request->judulartikel,
            'deskripsiartikel' => $request->deskripsiartikel,
            'gambarartikel' => $imagePath,
        ]);

        return redirect()->route('artikel')->with('success', 'Artikel berhasil diposting!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('admin.artikel.detailartikel', compact('artikels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('admin.artikel.editartikel', compact('artikels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulartikel' => 'required',
            'deskripsiartikel' => 'required',
            'gambarartikel' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5012',
        ]);

        $artikels = Artikels::findOrFail($id);

        if ($request->hasFile('gambarartikel')) {
            if ($artikels->gambarartikel && Storage::disk('public')->exists($artikels->gambarartikel)) {
                Storage::disk('public')->delete($artikels->gambarartikel);
            }
            $artikels->gambarartikel = $request->file('gambarartikel')->store('artikel', 'public');
        }

        $artikels->judulartikel = $request->judulartikel;
        $artikels->deskripsiartikel = $request->deskripsiartikel;
        $artikels->save();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikels = Artikels::findOrFail($id);

        if ($artikels->gambarartikel && Storage::disk('public')->exists($artikels->gambarartikel)) {
            Storage::disk('public')->delete($artikels->gambarartikel);
        }

        $artikels->delete();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil dihapus!');
    }
}
