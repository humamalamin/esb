<select id="{{ $attributes->get('wire:model') }}" {{ $attributes->merge(['class' => 'custom-select form-control']) }}>
    <option value="" selected>--- {{ __('Choose') }} Transaction ---</option>
    @foreach ($transactions as $transaction)
        <option value="{{ $transaction->id }}">{{ $transaction->no_transaction }}</option>
    @endforeach
</select>
@error($attributes->get('wire:model'))
    <span class="form-text text-danger">{{ $message }}</span>
@enderror