<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable =[
       'category_id', 'title' ,'slug', 'image', 'description'
    ];

    protected function image(  ): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/news/'. $value),
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
