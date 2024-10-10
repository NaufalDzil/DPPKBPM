<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use Illuminate\Http\Request;

class SppdController extends Controller
{
    public function index()
    {
        $sppd = Sppd::orderBy('id', 'desc')->get();

        return view('sppd.index', compact('sppd'));
    }

    public function create()
    {
        return view('sppd.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket'=>'nullable',
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

        Sppd::create($data);

        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil ditambahkan.');
    }

    public function edit(Sppd $sppd)
    {       
        return view('sppd.edit', compact('sppd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'ket'=>'nullable',
            'surat' => 'nullable|file|mimes:pdf|max:2048'
        ]);

        $sppd = Sppd::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $date = date('d-m-Y');
            $fileName = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pdf', $fileName);
            $data['surat'] = $fileName;
        }  

        $sppd->update($data);

        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil diedit.');
    }

    public function surat(Sppd $sppd)
    {
    return view('sppd.surat', compact('sppd'));
    }
}
