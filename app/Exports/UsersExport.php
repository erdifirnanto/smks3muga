<?php

namespace App\Exports;

use App\Models\pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function headings(): array
    {
        return [
            'no',
            'Nama Murid',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Asal Sekolah',
            'Alamat rumah',
            'nama_ayah',
            'nama_ibu',
            'nama_wali',
            'nohp',
            'email',
            'foto_murid',
            'dibuat',
            'diupdate',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pendaftaran::all();
    }
}
