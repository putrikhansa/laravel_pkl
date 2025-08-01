<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'product_id', 'qty'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
