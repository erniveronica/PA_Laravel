<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable =[
        'admin_id',
        'nama',
        'harga',
        'tempat_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
    public function tempat()
    {
        return $this->belongsTo(Tempat::class, 'tempat_id', 'id');
    }
}
