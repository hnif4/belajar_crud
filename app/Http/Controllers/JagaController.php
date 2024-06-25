<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JagaController extends Controller
{
    public function index ()
    {
        //mengambil data dari tabel
        $tb_jaga= DB::table('tb_jaga')->get();

        //mengirim data ke view
        return view ('VJaga',['tb_jaga' => $tb_jaga]);
    } 

    public function tambah(Request $request)
    {
    	DB::table('tb_jaga')->insert([
			'kd_dokter' => $request->kd_dokter,
			'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/tb_jaga');
 
    }

    public function hapus(Request $request)
    {
		$kd_dokter=$request->kd_dokter;
		DB::table('tb_jaga')->where('kd_dokter',$kd_dokter)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/tb_jaga');
 
    }

    public function update(Request $request)
    {
        $kd_dokter = $request->input('kd_dokter');
        $hari = $request->input('hari');
        $jam_mulai = $request->input('jam_mulai');
        $jam_selesai = $request->input('jam_selesai');
    
        DB::table('tb_jaga')
            ->where('kd_dokter', $kd_dokter)
            ->update([
                'hari' => $hari,
                'jam_mulai' => $jam_mulai,
                'jam_selesai' => $jam_selesai
            ]);
    
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }
    
		// alihkan halaman ke halaman berita


}
