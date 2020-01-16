<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KakatooConfirmEmail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dataregistration()
    {
        $data_user = \App\User::all();
        return view('admin.data-tables.index', ['data_user' => $data_user]);
    }

    public function datapending()
    {
        # code...
        $dataUser = \App\User::where('status',null)->orWhere('status', 0)->get();
        return view('admin.data-tables.index', ['data_user'=> $dataUser]);
    }

    public function dataconfirmed()
    {
        # code...   
        $dataUser = \App\User::where('status',1)->get();
        return view('admin.data-tables.index', ['data_user'=> $dataUser]);
    }

    public function detaildatauser($id)
    {
        $user = \App\User::find($id);
        return view('admin.data-tables.detailpeserta', ['user' => $user]);
    }

    public function confirmdatauser(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->update([
            'status' => $request->status
        ]);

        $emailData = array(
            'namaDepan' => $user->nama_depan,
            'namaBelakang' => $user->nama_belakang
        );

        Mail::to($user->email)->send(new KakatooConfirmEmail($emailData));
        return redirect('admin/data-tables');
    }

    public function login()
    {
        # code...
        return view('admin.login_admin');
    }

    public function postLogin(Request $request)
    {
        # code...
        if (\Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('admin');
        }
        
        return redirect()->back();

    }

    public function logout()
    {
        # code...
        \Auth::guard('admin')->logout();
        return redirect()->route('loginAdmin');
    }
}
