<?php

namespace App\Filament\Widgets;

use App\Models\PembayaranSPP;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class TotalPembayaranWidget extends BaseWidget
{
    protected static ?string $heading = 'Laporan Total Pembayaran SPP';

    protected function getTableQuery(): Builder
    {
        return PembayaranSPP::with('siswa', 'kelas')
            ->select(
                'siswa_id',
                DB::raw('MONTH(tanggal_bayar) as bulan'),
                DB::raw('SUM(jumlah) as total_dibayar'),
                'status',
                DB::raw('MAX(tanggal_bayar) as terakhir_bayar')
            )
            ->groupBy('siswa_id', 'bulan_spp', 'status');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('siswa.nama')->label('Nama Siswa'),
            Tables\Columns\TextColumn::make('kelas.nama')->label('Kelas'),
            Tables\Columns\TextColumn::make('bulan')
                ->label('Bulan_spp')
                ->formatStateUsing(fn($state) => [
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember',
                ][$state] ?? $state),
            Tables\Columns\TextColumn::make('total_dibayar')
                ->label('Total Dibayar')
                ->money('idr', true),
            Tables\Columns\TextColumn::make('status')->label('Status'),
            Tables\Columns\TextColumn::make('terakhir_bayar')->label('Tanggal Bayar')->date(),
        ];
    }
}
