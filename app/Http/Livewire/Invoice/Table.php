<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Table extends TableComponent
{
    use HtmlComponents;

    protected $listeners = [
        'refresh' => '$refresh',
        'confirmed',
        'cancelled',
    ];

    protected $options = [
        'bootstrap.classes.table' => 'table table-hover',
    ];

    public $sortDirection = 'desc';
    public $perPage = 10;
    public $exportFileName = 'invoices';
    public $exports = ['xlsx'];
    
    public $invoice;

    public function query(): Builder
    {
        return Invoice::with([
            'transaction',
            'transaction.subItem',
            'transaction.subItem.item',
            'transaction.subItem.item.itemType'
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make('Invoice ID', 'no_invoice')
                ->searchable()
                ->sortable(),
            Column::make('Item Type', 'transaction.subItem.item.itemType.name')
                ->searchable()
                ->sortable(),
            Column::make('Description', 'transaction.subItem.item.description')
                ->searchable()
                ->sortable(),
            Column::make('Quantity', 'transaction.qty')
                ->searchable()
                ->sortable(),
            Column::make('Unit Price', 'transaction.subItem.price')
                ->searchable()
                ->sortable(),
            Column::make('Amount', 'transaction.amount')
                ->searchable()
                ->sortable(),
            Column::make('Issue Date', 'issue_date')
                ->searchable()
                ->sortable(),
            Column::make('Due Date', 'due_date')
                ->searchable()
                ->sortable(),
            Column::make(__('Actions'))
                ->excludeFromExport()
                ->format(function (Invoice $model) {
                    return view('components.buttons.actions', [
                        'model' => $model,
                        'actions' => ['show', 'edit', 'delete']
                    ]);
                }),
            ];
    }

    public function showModal(Invoice $invoice)
    {
        $this->emitTo('invoice.show', 'show', $invoice);
    }

    public function editModal(Invoice $invoice)
    {
        $this->emitTo('invoice.edit', 'edit', $invoice);
    }

    public function destroyConfirm(Invoice $invoice)
    {
        $this->invoice = $invoice;

        $this->confirm(__('Are you sure?'), [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function confirmed()
    {
        $this->invoice->delete();

        $this->alert('success', __('Invoice') . __(' deleted successfully!'));
    }

    public function cancelled()
    {
        $this->alert('info', __('Delete canceled!'));
        $this->reset('invoice');
    }
}
