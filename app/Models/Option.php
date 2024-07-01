<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class option extends Model
{
    use HasFactory;

    protected $table = 'option_table';
    protected $primaryKey = 'option_id';
    
    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'menu_option_table', 'option_id', 'menu_id');
    }
    public function sidemenus()
    {
        return $this->belongsToMany(Sidemenu::class, 'menu_option_table', 'option_id', 'menu_id');
    }
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'option_id', 'option_id');
    }
}
