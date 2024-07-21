<?php

namespace App\Models;

use App\Traits\HasUsers;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasUuids, HasUsers;

    /**
     * Guarded
     * 
     * @param array
     */
    protected $guarded = [];

    /**
     * Belongs to category
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Has many table_of_contents
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function table_of_contents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TableOfContent::class);
    }
}
