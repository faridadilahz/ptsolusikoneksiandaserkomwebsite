<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanans;
use App\Models\Artikels;
use App\Models\Galeris;

class BerandasController extends Controller
{
    public function showBeranda()
    {
        $artikels = Artikels::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();
        $layanans  = Layanans::latest()->take(3)->get();

        return view('guest.beranda', compact('artikels', 'galeris', 'layanans'));
    }

    public function layanan(Request $request)
    {
        $layanans = Layanans::when($request->search, function ($query) use ($request) {
            $query->where('namalayanan', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsilayanan', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.layanan.layanan', compact('layanans'));
    }

    public function artikel(Request $request)
    {
        $artikels = Artikels::when($request->search, function ($query) use ($request) {
            $query->where('judulartikel', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsiartikel', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.artikel', compact('artikels'));
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

    public function showArtikel($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('guest.detailartikel', compact('artikels'));
    }

    public function showGaleri($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('guest.detailgaleri', compact('galeris'));
    }
}