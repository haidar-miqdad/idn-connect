<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    /**
     * posts
     *
     * @return void
     */
   


    /**
 * Get all news for this category.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function news()
{
    return $this->hasMany(News::class);
}
}
