<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\KakatooEmail;

class UserController extends Controller
{
    //
    public function registration()
    {
        # code...
        return view('user.registration');
    }

    public function congratulation()
    {
        # code...
        return view('user.congratulation');
    }

    public function prosesregistration(Request $request)
    {
        # code...
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:registration,email',
            'whatsappNumber' => 'required|numeric',
            'address' => 'required',
            'buktiPembayaran' => 'file|image|mimes:jpeg,png,jpg|max:2048|required',
            'fotoDiri' => 'file|image|mimes:jpeg,png,jpg|max:2048|required'
        ]);

        $filePembayaran = $request->file('buktiPembayaran');
        $fileFoto = $request->file('fotoDiri');
 
        $namaFilePembayaran = time()."_".$filePembayaran->getClientOriginalName();
        $namaFileFoto = time()."_".$fileFoto->getClientOriginalName();
	    $tujuan_upload = 'data_file';
        $filePembayaran->move($tujuan_upload,$namaFilePembayaran);
        $fileFoto->move($tujuan_upload,$namaFileFoto);
        
        User::create ([
            'nama_depan' => $request->firstName,
            'nama_belakang' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->whatsappNumber,
            'alamat' => $request->address,
            'bukti_pembayaran' => $namaFilePembayaran,
            'foto_peserta' => $namaFileFoto
        ]);

        $emailData = array(
            'namaDepan' => $request->firstName,
            'namaBelakang' => $request->lastName
        );

        Mail::to($request->email)->send(new KakatooEmail($emailData));

        // return redirect('/joinus')->with(['success' => 'Registration Successful']);
        return redirect('/congratulation')->with(['success' => 'Registration Successful']);

    }
}
