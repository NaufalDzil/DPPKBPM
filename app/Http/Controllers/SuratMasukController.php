<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratmasuk = SuratMasuk::orderBy('id', 'desc')->get();

        return view('suratmasuk.index', compact('suratmasuk'));
    }

    public function create()
    {
        return view('suratmasuk.create');
    }

    public function store(Request $request){
        $request->validate([
            'tanggal_terima' => 'required|date',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }        

        SuratMasuk::create($data);

        return redirect()->route('suratmasuk.index')->with('success', 'Surat Masuk berhasil ditambahkan.');
    }

    public function edit(SuratMasuk $suratmasuk)
    {       
        return view('suratmasuk.edit', compact('suratmasuk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_terima' => 'required|date',
            'alamat' => 'required',
            'tanggal_surat' => 'required|date',
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'surat' => 'nullable|file|mimes:pdf|max:2048'

        ]);

        $suratmasuk = SuratMasuk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $suratmasuk->update($data);

        return redirect()->route('suratmasuk.index')->with('success', 'Surat Masuk berhasil diedit.');
    }

    public function surat(SuratMasuk $suratmasuk)
    {
    return view('suratmasuk.surat', compact('suratmasuk'));
    }
}
