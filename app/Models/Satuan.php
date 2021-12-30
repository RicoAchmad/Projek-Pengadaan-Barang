<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nama_satuan',
    ];
    
    public function barang()
    {
        return $this->hasMany(Barang::class, 'satuan_id');
    }
}
