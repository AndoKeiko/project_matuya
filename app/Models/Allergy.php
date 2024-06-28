<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;

    protected $table = 'allergies_table';
    protected $primaryKey = 'allergies_id';

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_allergies_table', 'allergies_id', 'menu_id');
    }
}
