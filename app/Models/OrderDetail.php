<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail_table'; // テーブル名を指定

    protected $primaryKey = 'order_detail_id'; // 主キーを指定

    public $timestamps = false;

    protected $fillable = ['order_id', 'menu_id', 'option_id', 'indate', 'updated_at'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }
}
