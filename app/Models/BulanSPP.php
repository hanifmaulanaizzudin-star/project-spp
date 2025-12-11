<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulanSPP extends Model
{
     protected $table = 'bulan_spp';

    protected $fillable = ['nama_bulan','tahun'];

    public function pembayaran()
    {
        return $this->hasMany(PembayaranSPP::class, 'bulan_id');
    }
}
