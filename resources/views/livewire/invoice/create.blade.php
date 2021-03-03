<x-modal title="{{ __('Create') }} {{ __('Invoice') }}" id="createModal">
    <form id="create" wire:submit.prevent="store">
        <div class="form-group row">
            <x-label :label="__('Transaction')" for="transactionId" />
            <div class="col-md-9">
                <x-select-transaction required wire:model="transactionId" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('From')" for="from" />
            <div class="col-md-9">
                <x-textarea required wire:model="from" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Destination')" for="destination" />
            <div class="col-md-9">
                <x-textarea required wire:model="destination" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Issue Date')" for="issueDate" />
            <div class="col-md-9">
                <x-input type="date" required wire:model="issueDate" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Due Date')" for="dueDate" />
            <div class="col-md-9">
                <x-input type="date" required wire:model="dueDate" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Subject')" for="subject" />
            <div class="col-md-9">
                <x-input required wire:model="subject" />
            </div>
        </div>
    </form>

    <x-slot name="footer">
        <x-buttons.save form="create" />
    </x-slot>
</x-modal>