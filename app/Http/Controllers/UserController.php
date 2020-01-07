<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'buktiPembayaran' => 'file|image|mimes:jpeg,png,jpg|max:2048|required',
            'fotoDiri' => 'file|image|mimes:jpeg,png,jpg|max:2048|required'
        ]);

        $filePembayaran = $request->file('buktiPembayaran');
        $fileFoto = $request->file('fotoDiri');
 
        $namaFilePembayaran = time()."_".$filePembayaran->getClientOriginalName();
        $namaFileFoto = time()."_".$fileFoto->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'data_file';
        $filePembayaran->move($tujuan_upload,$namaFilePembayaran);
        $fileFoto->move($tujuan_upload,$namaFileFoto);

        User::create([
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
