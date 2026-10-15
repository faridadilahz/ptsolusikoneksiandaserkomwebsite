<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesans;
use App\Models\Layanans;
use App\Models\Artikels;
use App\Models\Galeris;
use App\Mail\KontakMail;
use Illuminate\Support\Facades\Mail;

class BerandasController extends Controller
{
    public function showBeranda()
    {
        $artikels = Artikels::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();
        $layanans  = Layanans::latest()->take(4)->get();

        return view('guest.beranda.beranda', compact('artikels', 'galeris', 'layanans'));
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

        return view('guest.artikel.artikel', compact('artikels'));
    }

    public function galeri(Request $request)
    {
        $galeris = Galeris::when($request->search, function ($query) use ($request) {
            $query->where('judulgaleri', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('guest.galeri.galeri', compact('galeris'));
    }

    public function showLayanan($id)
    {
        $layanans = Layanans::findOrFail($id);
        return view('guest.layanan.detaillayanan', compact('layanans'));
    }

    public function showArtikel($id)
    {
        $artikels = Artikels::findOrFail($id);
        return view('guest.artikel.detailartikel', compact('artikels'));
    }

    public function showGaleri($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('guest.galeri.detailgaleri', compact('galeris'));
    }

    public function kirimKontak(Request $request)
{
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'email'        => 'required|email|max:255',
        'pesan'        => 'required|string',
    ], [
        'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
        'email.required'        => 'Email wajib diisi.',
        'email.email'           => 'Format email tidak valid.',
        'pesan.required'        => 'Pesan tidak boleh kosong.',
    ]);

    // 1. Simpan Pesan ke Database untuk Dashboard Admin
    Pesans::create($validated);

    // 2. Kirim Notifikasi Email ke papatonqs@gmail.com
    try {
        Mail::to('papatonqs@gmail.com')->send(new KontakMail($validated));
    } catch (\Exception $e) {
        // Mencegah error jika koneksi SMTP/internet lokal sedang offline saat testing
    }

    return back()->with('success', 'Pesan Anda berhasil terkirim! Tim kami akan segera menghubungi Anda.');
}
}