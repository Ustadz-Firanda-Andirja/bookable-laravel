<?php

namespace App\Actions\Book;

use App\Models\Book;
use Lorisleiva\Actions\Concerns\AsAction;

class Read
{
    use AsAction;

    public function handle(Book $book)
    {
        return \App\Http\Resources\Book\Read::make($book);
    }
}
