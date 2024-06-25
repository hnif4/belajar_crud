<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function index ()
    {
        //mengambil data dari tabel
        $tb_dokter = DB::table('tb_dokter')->get();

        //mengirim data ke view
        return view ('VDokter',['tb_dokter' => $tb_dokter]);
    } 

    public function tambah(Request $request)
    {
    	DB::table('tb_dokter')->insert([
			'kd_dokter' => $request->kd_dokter,
			'nama_dokter' => $request->nama_dokter,
            'kd_spesialis' => $request->kd_spesialis,
            'telepon' => $request->telepon,
            'sex' => $request->sex,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/tb_dokter');
 
    }

    public function hapus(Request $request)
    {
		$kd_dokter=$request->kd_dokter;
		DB::table('tb_dokter')->where('kd_dokter',$kd_dokter)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/tb_dokter');
 
    }

    public function edit(Request $request)
    {
    	DB::table('tb_dokter')->where('kd_dokter',$request->kd_dokter)->update([
		
			'nama_dokter' => $request->nama_dokter,
            'kd_spesialis' => $request->kd_spesialis,
            'telepon' => $request->telepon,
            'sex' => $request->sex,


		]);
		// alihkan halaman ke halaman berita
		return redirect('/tb_dokter');
 
    }



}