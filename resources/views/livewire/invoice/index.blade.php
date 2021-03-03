<x-slot name="title">{{ __('Invoice') }}</x-slot>

<x-slot name="menu">{{ __('Invoice') }}</x-slot>

<x-slot name="breadcrumb">
    <li class="breadcrumb-item text-muted">
        {{ __('Invoice') }}
    </li>
</x-slot>

<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                {{ __('Manage') }} {{ __('Invoice') }}
            </h3>
        </div>
        <div class="card-toolbar">
            <x-buttons.create :title="__('Invoice')" data-toggle="modal" data-target="#createModal" />
        </div>
    </div>
    <div class="card-body">
        <livewire:invoice.table />
    </div>
</div>

@push('modal')
    <livewire:invoice.create />
    <livewire:invoice.show />
    <livewire:invoice.edit />
@endpush
