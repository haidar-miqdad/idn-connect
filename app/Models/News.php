<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'category_id', 'user_id', 'content', 'image', 'code'
    ];

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
{
    return Attribute::make(
        get: fn ($image) => $image
            ? url('/storage/news/' . $image)
            : null,
    );
}



        protected static function boot()
{
    parent::boot();

    static::creating(function ($news) {
        $news->code = 'HDR-' . strtoupper(Str::random(6));
    });
}


public function getExcerptAttribute()
{
    return Str::limit(strip_tags($this->content), 50); // 100 karakter
}
}
