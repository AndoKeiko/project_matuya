<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class menu extends Model
{
    use HasFactory;

    protected $table = 'menu_table';

    public function options(): BelongsTo
    {
        return $this->belongsTo(Option::class, 'option_id', 'option_id');
    }
}

