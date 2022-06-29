<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('barcode', 'like', '%' . request('search') . '%')
                ->orWhere('nama_barang', 'like', '%' . request('search') . '%');
        }
    }

    public function pricelist()
    {
        return $this->hasMany(Pricelist::class);
    }
}
