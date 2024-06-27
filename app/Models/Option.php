<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class option extends Model
{
    use HasFactory;

    protected $table = 'option_table'; 
    
    public function menus() : HasMany
    {

      return $this->hasMany(menu::class, 'option_id', 'option_id');

    }
}
