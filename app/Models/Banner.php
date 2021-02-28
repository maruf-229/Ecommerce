<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public static function orderBy(string $string, string $string1)
    {
    }

    public  function images()
    {
        return $this->hasMany('App\Models\BannerImages');
    }
}
