<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembayaranSPP extends Model
{
    protected $table = 'pembayaran_spp';

    protected $fillable = ['siswa_id','bulan_id','jumlah','tanggal_bayar','status'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function bulan()
    {
        return $this->belongsTo(BulanSPP::class);
    }
}
