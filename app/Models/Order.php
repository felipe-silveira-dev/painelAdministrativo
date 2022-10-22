<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }

    // public function stocks()
    // {
    //     return $this->belongsToMany(Stock::class, 'order_items')->using(OrderItem::class)->withPivot('quantity', 'price');
    // }


}
