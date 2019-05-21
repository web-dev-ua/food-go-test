<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'descr'     => $this->descr,
            'category'  => new CategoryResource($this->whenLoaded('category')),
            'tags'      => TagResource::collection($this->whenLoaded('tags')),
        ];
    }
}
