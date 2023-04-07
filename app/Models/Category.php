<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Category
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image'
    ];

    /**
     * Summary of image
     * @return Attribute
     */
    protected function image(  ): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/categories/'. $value),
        );
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
