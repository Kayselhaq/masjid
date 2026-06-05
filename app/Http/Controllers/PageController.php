<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\JadwalSholat;
use App\Models\Kas;
use App\Models\Galeri;
use Illuminate\Http\Request;
class PageController extends Controller
{
   public function home()
{
    $kegiatan = Kegiatan::latest()->take(3)->get();
$pengumuman = Pengumuman::latest()->take(3)->get();

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
    public function detailKegiatan($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('pages.detail-kegiatan', compact('kegiatan'));
    }
    public function pengumuman()
    {
        $allPengumuman = Pengumuman::latest()->get();

    $pengumuman = Pengumuman::latest()->paginate(3);

    return view('pages.pengumuman', compact(
        'pengumuman',
        'allPengumuman'
    ));
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
    $data = Kas::latest()->get();

    $filename = "laporan_keuangan.csv";

    $headers = [
        "Content-Type" => "text/csv",
        "Content-Disposition" => "attachment; filename={$filename}",
    ];

    $callback = function () use ($data) {

        $file = fopen('php://output', 'w');

        fputcsv($file, [
            'Tanggal',
            'Keterangan',
            'Jenis',
            'Kategori',
            'Nominal'
        ]);

        foreach ($data as $row) {

            fputcsv($file, [
                $row->tanggal,
                $row->keterangan,
                $row->jenis,
                $row->kategori,
                $row->nominal,
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
    public function galeri(\Illuminate\Http\Request $request)
{
    $query = \App\Models\Galeri::latest();

    if ($request->kategori) {
        $query->where('kategori', $request->kategori);
    }

    $galeri = $query->paginate(6);

    return view('pages.galeri', compact('galeri'));
}

    public function detailPengumuman($id)
    {
         $pengumuman = Pengumuman::findOrFail($id);

        return view('pages.detail-pengumuman', compact('pengumuman'));
    }
}