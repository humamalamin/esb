<?php

namespace App\Http\Resources;

use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'transaction_id' => $this->transaction_id,
            'no_invoice' => $this->no_invoice,
            'from' => $this->from,
            'destination' => $this->destination,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'subject' => $this->subject,
            'sub_total' => $this->sub_total,
            'tax' => $this->tax,
            'payment' => $this->payment,
            'transaction' => new TransactionResource($this->transaction)
        ];
    }
}
