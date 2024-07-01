<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $table = 'tax_table';

    public function orders()
    {
        return $this->hasMany(Order::class, 'tax_id', 'tax_id');
    }
}
