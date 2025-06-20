<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'total_price', 'order_code', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi many to many dgn product

    public function products()
    {
        return $this->belongsToMany(Product::class)->wuthPivot('qty', 'price')
            ->withTimestamps();
    }
}
