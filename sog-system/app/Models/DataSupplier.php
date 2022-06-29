<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSupplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('nama_supplier', 'like', '%' . request('search') . '%')
                ->orWhere('kota', 'like', '%' . request('search') . '%');
        }
    }
}
