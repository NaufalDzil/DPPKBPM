<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(SuratMasuk $suratmasuk)
    {
        $disposisi = SuratMasuk::all();
        return view('disposisi.index', compact('suratmasuk'));
    }

    public function cetak(SuratMasuk $suratmasuk)
    {
        return view('disposisi.disposisi', compact('suratmasuk'));
    }

    public function create(SuratMasuk $suratmasuk)
    {       
        return view('disposisi.create' , compact('suratmasuk'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'disposisi' => 'nullable|file|mimes:pdf|max:2048'

        ]);

        $suratmasuk = SuratMasuk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('disposisi')) {
            $file = $request->file('disposisi');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['disposisi'] = $fileName;
        }  

        $suratmasuk->update($data);

        return redirect()->route('disposisi.index', $suratmasuk->id)
                     ->with('success', 'Disposisi berhasil diunggah.');
    }

    public function edit(SuratMasuk $suratmasuk)
    {       
        return view('disposisi.edit' , compact('suratmasuk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'disposisi' => 'nullable|file|mimes:pdf|max:2048'

        ]);

        $suratmasuk = SuratMasuk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('disposisi')) {
            $file = $request->file('disposisi');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['disposisi'] = $fileName;
        }  

        $suratmasuk->update($data);

        return redirect()->route('disposisi.index', $suratmasuk->id)
                     ->with('success', 'Disposisi berhasil diedit.');
    }
}
