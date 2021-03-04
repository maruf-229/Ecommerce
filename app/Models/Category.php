<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 */
class Category extends Model
{
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
