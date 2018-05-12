<?php

namespace App\Http\Resources;

use App\Http\Resources\ArticleResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticlesResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'articles' => ArticleResource::collection($this->collection)
        ];
    }
}
