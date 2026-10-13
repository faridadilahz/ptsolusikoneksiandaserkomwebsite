<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanans;
use App\Models\Beritas;
use App\Models\Galeris;

class BerandasController extends Controller
{
    public function showBeranda()
    {
        $beritas = Beritas::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();
        $layanans  = Layanans::latest()->take(3)->get();

        return view('guest.beranda', compact('beritas', 'galeris', 'layanans'));
    }

    public function layanan(Request $request)
    {
        $layanans = Layanans::when($request->search, function ($query) use ($request) {
            $query->where('namalayanan', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsilayanan', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.layanan.layanan', compact('layanans'));
    }

    public function berita(Request $request)
    {
        $beritas = Beritas::when($request->search, function ($query) use ($request) {
            $query->where('judulberita', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsiberita', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.berita', compact('beritas'));
    }

    public function galeri(Request $request)
    {
        $galeris = Galeris::when($request->search, function ($query) use ($request) {
            $query->where('judulgaleri', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsigaleri', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.galeri', compact('galeris'));
    }

    public function showLayanan($id)
    {
        $layanans = Layanans::findOrFail($id);
        return view('guest.layanan.detaillayanan', compact('layanans'));
    }

    public function showBerita($id)
    {
        $beritas = Beritas::findOrFail($id);
        return view('guest.detailberita', compact('beritas'));
    }

    public function showGaleri($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('guest.detailgaleri', compact('galeris'));
    }
}