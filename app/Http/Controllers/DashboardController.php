<?php

namespace App\Http\Controllers;

use App\Models\Mou;
use App\Models\Nodin;
use App\Models\Sk;
use App\Models\Spj;
use App\Models\Sppd;
use App\Models\St;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    //Total Surat
    $totalsuratmasuk = SuratMasuk::whereDate('created_at', Carbon::today())->count();
    $totalsuratkeluar = SuratKeluar::whereDate('created_at', Carbon::today())->count();
    $totalspj = Spj::whereDate('created_at', Carbon::today())->count();
    $totalnodin = Nodin::whereDate('created_at', Carbon::today())->count();
    $totalsk = Sk::whereDate('created_at', Carbon::today())->count();
    $totalmou = Mou::whereDate('created_at', Carbon::today())->count();
    $totalsppd = Sppd::whereDate('created_at', Carbon::today())->count();
    $totalst = St::whereDate('created_at', Carbon::today())->count();

    $suratmasuk = SuratMasuk::orderBy('id', 'desc')->take('3')->get();
    $suratkeluar = SuratKeluar::orderBy('id', 'desc')->take('3')->get();


    return view('dashboard', compact('totalsuratmasuk', 'totalsuratkeluar', 'suratmasuk', 'suratkeluar', 'totalspj', 'totalnodin', 'totalsk', 'totalmou', 'totalsppd','totalst'));
 }   
}
