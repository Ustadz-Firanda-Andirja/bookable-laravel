<?php

namespace App\Actions\TableOfContent;

use App\Models\TableOfContent;
use Lorisleiva\Actions\Concerns\AsAction;

class Read
{
    use AsAction;

    public function handle(TableOfContent $tableOfContent)
    {
        return \App\Http\Resources\TableOfContent\Read::make($tableOfContent);
    }
}
