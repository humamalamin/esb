<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = [
        'show'
    ];

    public $transactionId;
    public $subject;
    public $dueDate;
    public $issueDate;
    public $from;
    public $destination;
    public $transaction;
    public $amount;
    public $price;
    public $qty;
    public $description;
    public $itemType;
    public $subTotal;
    public $tax;
    public $payment;

    public function render()
    {
        return view('livewire.invoice.show');
    }

    public function show(Invoice $invoice)
    {
        $this->transactionId = $invoice->transaction_id;
        $this->subject = $invoice->subject;
        $this->dueDate = $invoice->due_date;
        $this->issueDate = $invoice->issue_date;
        $this->from = $invoice->from;
        $this->destination = $invoice->destination;
        $this->transaction = $invoice->transaction->no_transaction;
        $this->description = $invoice->transaction->subItem->item->name;
        $this->itemType = $invoice->transaction->subItem->item->itemType->name;
        $this->amount = $invoice->transaction->amount;
        $this->qty = $invoice->transaction->qty;
        $this->price = $invoice->transaction->subItem->price;
        $this->payment = $invoice->payment;
        $this->tax = $invoice->tax;
        $this->subTotal = $invoice->sub_total;
    }
}
