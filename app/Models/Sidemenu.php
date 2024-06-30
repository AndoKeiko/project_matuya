<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidemenu extends Model
{
    use HasFactory;

    protected $table = 'menu_table';
    protected $primaryKey = 'menu_id';
    
    public function options()
    {
        return $this->belongsToMany(Option::class, 'menu_option_table', 'menu_id', 'option_id');
    }

}
