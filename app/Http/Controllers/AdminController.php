<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect('admin/data-tables');
    }
}
