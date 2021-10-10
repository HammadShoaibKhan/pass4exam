<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_email',
        'user_detail',
        'total_bill', 
        'total_discount', 
        'order_detail', 
        'subscribed_for', 
        'paid', 
        'status',
    ];
}
