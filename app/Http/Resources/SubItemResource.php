<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubItemResource extends JsonResource
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
            'id' => $this->id,
            'item_id' => $this->item_id,
            'stock' => $this->stock,
            'price' => $this->price,
            'item' => new ItemResource($this->item),
        ];
    }
}
