<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class menu extends Model
{
    use HasFactory;

    protected $table = 'menu_table';
    protected $primaryKey = 'menu_id';

    public function options()
    {
        return $this->belongsToMany(Option::class, 'menu_option_table', 'menu_id', 'option_id');
    }

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class, 'menu_allergies_table', 'menu_id', 'allergies_id');
    }

    public function serveMethods()
    {
        return $this->belongsToMany(Serve::class, 'menu_serve_table', 'menu_id', 'serve_id');
    }
}

