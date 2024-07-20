<?php

namespace App\Actions\Category;

use App\Models\Category;
use Lorisleiva\Actions\Concerns\AsAction;

class Index
{
    use AsAction;

    public function handle()
    {
        $categories = Category::whereNull('category_id')->get();

        return \App\Http\Resources\Category\Index::collection($categories);
    }
}
