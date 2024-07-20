<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TableOfContent extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'label' => $this->label,
            'table_of_contents' => TableOfContent::collection($this->table_of_contents)
        ];
    }
}
