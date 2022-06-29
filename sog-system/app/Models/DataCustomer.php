<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCustomer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('nama_customer', 'like', '%' . request('search') . '%')
                ->orWhere('kota', 'like', '%' . request('search') . '%')
                ->orWhere('area', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pricelist()
    {
        return $this->hasMany(Pricelist::class);
    }
}
