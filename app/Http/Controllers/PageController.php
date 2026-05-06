<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\JadwalSholat;
use App\Models\Kas;

class PageController extends Controller
{
   public function home()
{
    $kegiatan = [];
$pengumuman = [];

    $jadwal = [
        'Fajr' => '-',
        'Dhuhr' => '-',
        'Asr' => '-',
        'Maghrib' => '-',
        'Isha' => '-',
    ];

    try {
        $response = Http::get('https://api.aladhan.com/v1/timingsByCity', [
            'city' => 'Jakarta',
            'country' => 'Indonesia',
            'method' => 2
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['data']['timings'])) {
                $jadwal = $data['data']['timings'];
            }
        }
    } catch (\Exception $e) {
        // biarin fallback
    }

    return view('pages.home', compact('kegiatan','pengumuman','jadwal'));
}

    public function profil()
    {
        return view('pages.profil');
    }

    public function kegiatan()
    {
        return view('pages.kegiatan', [
            'kegiatan' => Kegiatan::all()
        ]);
    }

    public function pengumuman()
    {
        return view('pages.pengumuman', [
            'pengumuman' => Pengumuman::all()
        ]);
    }

    public function keuangan()
{
    $kas = Kas::latest()->get();

    $totalMasuk = Kas::where('jenis', 'masuk')->sum('nominal');
    $totalKeluar = Kas::where('jenis', 'keluar')->sum('nominal');
    $saldo = $totalMasuk - $totalKeluar;

    // 🔥 kategori
    $operasional = Kas::where('kategori','operasional')->sum('nominal');
    $pembangunan = Kas::where('kategori','pembangunan')->sum('nominal');
    $sosial = Kas::where('kategori','sosial')->sum('nominal');

    $totalKategori = $operasional + $pembangunan + $sosial;

    $persenOperasional = $totalKategori ? ($operasional / $totalKategori) * 100 : 0;
    $persenPembangunan = $totalKategori ? ($pembangunan / $totalKategori) * 100 : 0;
    $persenSosial = $totalKategori ? ($sosial / $totalKategori) * 100 : 0;

    return view('pages.keuangan', compact(
        'kas',
        'totalMasuk',
        'totalKeluar',
        'saldo',
        'persenOperasional',
        'persenPembangunan',
        'persenSosial'
    ));
}
    public function storeKas(Request $request)
{
    Kas::create([
        'tanggal' => $request->tanggal,
        'keterangan' => $request->keterangan,
        'jenis' => $request->jenis,
        'nominal' => $request->nominal,
        'kategori' => $request->kategori,
    ]);

    return redirect('/keuangan');
}
    public function updateKas(Request $request, $id)
{
    $kas = Kas::findOrFail($id);

    $kas->update([
        'tanggal' => $request->tanggal,
        'keterangan' => $request->keterangan,
        'jenis' => $request->jenis,
        'kategori' => $request->kategori,
        'nominal' => $request->nominal,
    ]);

    return redirect('/keuangan');
}
public function exportKeuangan()
{
    $data = \App\Models\Kas::latest()->get();

    $filename = "laporan_keuangan.csv";

    $headers = [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=$filename",
    ];

    $callback = function () use ($data) {
        $file = fopen('php://output', 'w');

        // Header kolom
        fputcsv($file, ['Tanggal', 'Keterangan', 'Kategori', 'Jumlah']);

        foreach ($data as $row) {
            fputcsv($file, [
                $row->created_at,
                $row->keterangan,
                $row->kategori,
                $row->jumlah
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

    public function donasi()
{
    $kas = \App\Models\Kas::latest()->take(5)->get();

    $totalMasuk = \App\Models\Kas::where('jenis', 'masuk')->sum('nominal');
    $totalKeluar = \App\Models\Kas::where('jenis', 'keluar')->sum('nominal');
    $saldo = $totalMasuk - $totalKeluar;

    return view('pages.donasi', compact('kas','totalMasuk','totalKeluar','saldo'));
}
    public function galeri()
    {
        return view('pages.galeri');
    }

    public function detailPengumuman($id)
    {
         $pengumuman = Pengumuman::findOrFail($id);

        return view('pages.detail-pengumuman', compact('pengumuman'));
    }
}