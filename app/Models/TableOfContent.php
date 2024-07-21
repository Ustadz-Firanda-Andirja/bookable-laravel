<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOfContent extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'footnotes' => 'json'
    ];

    public function table_of_content()
    {
        return $this->belongsTo(TableOfContent::class);
    }

    public function table_of_contents()
    {
        return $this->hasMany(TableOfContent::class);
    }
}
