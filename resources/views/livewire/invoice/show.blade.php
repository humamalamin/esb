<x-modal title="{{ __('View') }} {{ __('Invoice') }}" id="showModal">
    <form>
        <div class="form-group row">
            <x-label :label="__('No Transaction')" for="transaction" />
            <div class="col-md-9">
                <x-label :label="$transaction"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Item Type')" for="itemType" />
            <div class="col-md-9">
                <x-label :label="$itemType"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Description')" for="description" />
            <div class="col-md-9">
                <x-label :label="$description"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Quantity')" for="qty" />
            <div class="col-md-9">
                <x-label :label="$qty"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Price')" for="price" />
            <div class="col-md-9">
                <x-label :label="$price"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Amount')" for="amount" />
            <div class="col-md-9">
                <x-label :label="$amount"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('From')" for="from" />
            <div class="col-md-9">
                <x-label :label="$from"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Destination')" for="destination" />
            <div class="col-md-9">
                <x-label :label="$destination" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Issue Date')" for="issueDate" />
            <div class="col-md-9">
                <x-label :label="$issueDate" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Due Date')" for="dueDate" />
            <div class="col-md-9">
                <x-label :label="$dueDate" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Subject')" for="subject" />
            <div class="col-md-9">
                <x-label :label="$subject" />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Sub Total')" for="subtotal" />
            <div class="col-md-9">
                <x-label :label="$subTotal"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Tax')" for="tax" />
            <div class="col-md-9">
                <x-label :label="$tax"  />
            </div>
        </div>
        <div class="form-group row">
            <x-label :label="__('Payment')" for="payment" />
            <div class="col-md-9">
                <x-label :label="$payment"  />
            </div>
        </div>
    </form>

    <x-slot name="footer">
        <x-buttons.close-modal />
    </x-slot>
</x-modal>
