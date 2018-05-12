<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => (string)$this->id,
            'title' => $this->title,
            'body' => $this->body,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at
        ];   
    }
}