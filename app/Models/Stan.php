<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stan extends Model
{
    protected $table = 'stan';

    public const JENIS = ['Makanan', 'Camilan', 'Koperasi'];

    protected $fillable = [
        'nama_stan',
        'jenis',
        'nama_pemilik',
        'lokasi',
        'no_whatsapp',
        'is_aktif',
    ];

    protected function casts(): array
    {
        return [
            'is_aktif' => 'boolean',
        ];
    }
}
