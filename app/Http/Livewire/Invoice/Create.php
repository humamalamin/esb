<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use App\Models\Transaction;
use Livewire\Component;

class Create extends Component
{
    public $transactionId;
    public $subject;
    public $dueDate;
    public $issueDate;
    public $from;
    public $destination;

    public function render()
    {
        return view('livewire.invoice.create');
    }

    public function rules()
    {
        return [
            'transactionId' => ['required', 'exists:transactions,id'],
            'subject' => ['required'],
            'dueDate' => ['required'],
            'issueDate' => ['required'],
            'from' => ['required'],
            'destination' => ['required']
        ];
    }

    public function store()
    {
        $this->validate();

        $transaction = Transaction::find($this->transactionId);

        $subTotal = $transaction->amount;

        $noInvoice = generateRandomString(6);
        $tax = $subTotal * 0.1;
        $payment = $subTotal - $tax;
        Invoice::create([
            'transaction_id' => $this->transactionId,
            'from' => $this->from,
            'destination' => $this->destination,
            'no_invoice' => $noInvoice,
            'issue_date' => $this->issueDate,
            'due_date' => $this->dueDate,
            'subject' => $this->subject,
            'sub_total' => $subTotal,
            'tax' => $tax,
            'payment' => $payment
        ]);

        $this->emitTo('invoice.table', 'refresh');
        $this->dispatchBrowserEvent('closeModals');
        $this->alert('success', __('Invoice') . __(' created successfully!'));
        $this->reset();
    }
}
