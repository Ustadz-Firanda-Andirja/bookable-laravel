<?php

namespace App\Actions\Category;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class Books
{
    use AsAction;

    public function handle(Request $request, Category $category)
    {
        $books = Book::where('category_id', $category->id)
            ->when($request->language, fn ($query) => $query->where('language', $request->language))
            ->get();

        return \App\Http\Resources\Category\Books::collection($books);
    }
}
