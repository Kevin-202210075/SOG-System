<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    use HasFactory;

    public function datacustomer()
    {
        return $this->belongsTo(DataCustomer::class);
    }

    public function databarang(){
        return $this->belongsTo(DataBarang::class);
    }
}
