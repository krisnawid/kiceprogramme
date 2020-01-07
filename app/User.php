<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "registration";
    protected $fillable = [
    'nama_depan',
    'nama_belakang',
    'email',
    'phone',
    'alamat',
    'bukti_pembayaran',
    'foto_peserta',
    'status'];
}
