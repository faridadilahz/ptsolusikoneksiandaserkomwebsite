<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesans;

class PesansController extends Controller
{
    public function index(Request $request)
    {
        $pesans = Pesans::when($request->search, function ($query) use ($request) {
            $query->where('nama_lengkap', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('pesan', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('admin.pesan.kelolapesan', compact('pesans'));
    }

    public function show($id)
    {
        $pesan = Pesans::findOrFail($id);

        if ($pesan->status == 'belum_dibaca') {
            $pesan->update(['status' => 'sudah_dibaca']);
        }

        return view('admin.pesan.detailpesan', compact('pesan'));
    }

    public function destroy($id)
    {
        $pesan = Pesans::findOrFail($id);
        $pesan->delete();

        return redirect()->route('pesan')->with('success', 'Pesan berhasil dihapus!');
    }
}
