<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'customer_id',
        'shipping_id',
        'order_code',
        'order_status',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'order_id';

    protected $table = 'tbl_order';
    
}
