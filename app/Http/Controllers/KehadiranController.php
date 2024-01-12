<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{

    public function index() {

        $kehadiran = Kehadiran::all();
        $jadwal = Jadwal::all();

        return view('pages.admin.kehadiran.index', compact('kehadiran', 'jadwal'));
    }

    public function absen($id)
    {
        $jadwal = Jadwal::find($id);
        $siswa = Siswa::where('kelas_id', $jadwal->kelas_id)->get();
        // dd($siswa);

        return view('pages.admin.kehadiran.absen', compact('jadwal', 'siswa'));
    }

    public function submit(Request $request)
    {
        foreach ($request->input as $key => $value) {
            $kehadiran = new Kehadiran;
            $kehadiran->nis = $value['nis'];
            $kehadiran->telp = $value['telp'];
            $kehadiran->nama_siswa = $value['nama'];
            if ($value['keterangan'] === "Pilih") {
                $kehadiran->keterangan = NULL;
            } else {
                $kehadiran->keterangan = $value['keterangan'];
            }
            $kehadiran->jadwal_id = $request->get('jadwal_id');
            $kehadiran->ekstrakulikuler_id = $request->get('ekstrakulikuler_id');
            $kehadiran->hari = $request->get('hari');
            $kehadiran->dari_jam = $request->get('dari_jam');
            $kehadiran->sampai_jam = $request->get('sampai_jam');
            $kehadiran->save();
        }
        $notification = array(
            'message' =>'Absensi Berhasil', 'alert-type' =>'success'
        );
        return redirect()->route('kehadiran.index')->with($notification);
    }
}