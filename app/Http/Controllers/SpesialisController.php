<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SpesialisController extends Controller
{
    public function index ()
    {
        //mengambil data dari tabel
        $tb_spesialis= DB::table('tb_spesialis')->get();

        //mengirim data ke view
        return view ('VSpesialis',['tb_spesialis' => $tb_spesialis]);
    } 

	public function tambah(Request $request)
	{
		DB::table('tb_spesialis')->insert([
			'kd_spesialis' => $request->kd_spesialis,
			'spesialis' => $request->spesialis,
		]);
		return redirect('/tb_spesialis')->with('success', 'Data berhasil ditambahkan');
	}
	

    public function hapus(Request $request)
    {
		$kd_spesialis=$request->kd_spesialis;
		DB::table('tb_spesialis')->where('kd_spesialis',$kd_spesialis)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/tb_spesialis');
 
    }

    public function update(Request $request)
    {
        $kd_spesialis = $request->input('kd_spesialis');
        $spesialis = $request->input('spesialis');
            
        DB::table('tb_spesialis')
            ->where('kd_spesialis', $kd_spesialis)
            ->update([
                'spesialis' => $spesialis,
               
            ]);
    
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }
    
		// alihkan halaman ke halaman berita


}
