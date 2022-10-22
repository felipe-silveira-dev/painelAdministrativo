<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function orderItems()
    // {
    //     return $this->hasMany(OrderItem::class);
    // }

    // public function orders()
    // {
    //     return $this->belongsToMany(Order::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }

    // public function customers()
    // {
    //     return $this->belongsToMany(Customer::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }
}
