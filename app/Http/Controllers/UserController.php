<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function registration()
    {
        # code...
        return view('user.registration');
    }

    public function prosesregistration(Request $request)
    {
        # code...
        $this->validate($request, [
            'buktiPembayaran' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'fotoDiri' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filePembayaran = $request->file('buktiPembayaran');
        $fileFoto = $request->file('fotoDiri');
 
        $namaFilePembayaran = time()."_".$filePembayaran->getClientOriginalName();
        $namaFileFoto = time()."_".$fileFoto->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'data_file';
        $filePembayaran->move($tujuan_upload,$namaFilePembayaran);
        $fileFoto->move($tujuan_upload,$namaFileFoto);
    
        DB::table('registration')->insert([
            'nama_depan' => $request->firstName,
            'nama_belakang' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->address,
            'bukti_pembayaran' => $namaFilePembayaran,
            'foto_peserta' => $namaFileFoto
        ]);
        return redirect('/');
    }
}
