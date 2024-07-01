<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order_table'; // テーブル名を指定

    protected $primaryKey = 'order_id'; // 主キーを指定

    public $timestamps = false;

    protected $fillable = ['subtotal_price', 'tax_id', 'total_price', 'payment_id', 'indate', 'updated_at'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'order_id');
    }
}
