<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id' => $this->id,
            'no_transaction' => $this->no_transaction,
            'sub_item_id' => $this->sub_item_id,
            'qty' => $this->qty,
            'amount' => $this->amount,
            'sub_item' => new SubItemResource($this->subItem),
        ];
    }
}
