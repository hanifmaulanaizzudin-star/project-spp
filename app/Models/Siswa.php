<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['nama','nis','kelas','alamat'];

    public function pembayaran()
    {
        return $this->hasMany(PembayaranSPP::class, 'siswa_id');
    }
}
