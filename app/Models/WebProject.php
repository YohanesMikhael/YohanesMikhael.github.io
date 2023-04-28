<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;



class WebProject extends Model
{
    protected $fillable = [
        'Gambar', 'Nama_Aplikasi', 'Tanggal_Pembuatan',
        'Text', 'Role', 'Demo', 'Tech_1', 'Tech_2',
        'Tech_3', 'Tech_4', 'Tech_5', 'Tech_6'
    ];

    public function getBulanTahunAttribute()
{
    $tanggal_pembuatan = new DateTime($this->Tanggal_Pembuatan);
    return $tanggal_pembuatan->format('F Y');
}

    

}
