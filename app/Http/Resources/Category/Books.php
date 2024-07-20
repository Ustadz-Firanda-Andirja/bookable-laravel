<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Books extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'isbn' => $this->isbn,
            'cover' => $this->cover,
            'publisher' => $this->publisher,
            'language' => $this->language
        ];
    }
}
