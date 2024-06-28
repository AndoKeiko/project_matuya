<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    use HasFactory;

    protected $table = 'serve_method_table';
    protected $primaryKey = 'serve_id';

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_serve_table', 'serve_id', 'menu_id');
    }
}
