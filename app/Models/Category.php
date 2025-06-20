<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'slug'];

    // membuat relasi one to many ke model product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
