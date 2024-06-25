<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$tb_pasien = DB::table('tb_pasien')->get();
 
    	// mengirim data ke view
    	return view('VPasien',['tb_pasien' => $tb_pasien]);
 
    }

	public function tambah(Request $request)
    {
    	DB::table('tb_pasien')->insert([
			'kd_pasien' => $request->kd_pasien,
			'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon,
			'spesialis' => $request->spesialis,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/tb_pasien');
 
    }

    public function hapus(Request $request)
    {
		$kd_pasien=$request->kd_pasien;
		DB::table('tb_pasien')->where('kd_pasien',$kd_pasien)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/tb_pasien');
 
    }


	
	public function edit(Request $request)
    {
        $kd_pasien = $request->input('kd_pasien');
        $nama_pasien = $request->input('nama_pasien');
        $alamat = $request->input('alamat');
        $jenis_kelamin = $request->input('jenis_kelamin');
		$telepon= $request->input('telepon');

    
        DB::table('tb_pasien')
            ->where('kd_pasien', $kd_pasien)
            ->update([
                'nama_pasien' => $nama_pasien,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
				'telepon' => $telepon
            ]);
    
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }
}
