<?php

namespace App\Models;

use App\Traits\HasUsers;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasUuids, HasUsers;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function table_of_contents()
    {
        return $this->hasMany(TableOfContent::class);
    }
}
