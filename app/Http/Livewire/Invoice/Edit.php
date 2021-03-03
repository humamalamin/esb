<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use App\Models\Transaction;
use Livewire\Component;

class Edit extends Component
{
    protected $listeners = [
        'edit'
    ];

    public $transactionId;
    public $subject;
    public $dueDate;
    public $issueDate;
    public $from;
    public $destination;
    public $invoiceId;

    public function render()
    {
        return view('livewire.invoice.edit');
    }

    public function edit(Invoice $invoice)
    {
        $this->invoiceId = $invoice->id;
        $this->transactionId = $invoice->transaction_id;
        $this->subject = $invoice->subject;
        $this->dueDate = $invoice->due_date;
        $this->issueDate = $invoice->issue_date;
        $this->from = $invoice->from;
        $this->destination = $invoice->destination;
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

    public function update(Invoice $invoice)
    {
        $this->validate();

        $transaction = Transaction::find($this->transactionId);

        $subTotal = $transaction->amount;

        $noInvoice = generateRandomString(6);
        $tax = $subTotal * 0.1;
        $payment = $subTotal - $tax;
        $invoice->update([
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
        $this->alert('success', __('Invoice') . __(' updated successfully!'));
        $this->reset();
    }
}
