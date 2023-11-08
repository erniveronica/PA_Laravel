<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;
    protected $table = 'tempat';

    protected $fillable =[
        'admin_id',
        'nama',
        'alamat',
        'jam_buka',
        'jam_tutup',
        'gambar',
        'link_maps',
        'kontak',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
