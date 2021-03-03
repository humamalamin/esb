<input id="{{ $attributes->get('wire:model') }}"
    {{ $attributes->merge(['class' => 'form-control', 'type' => 'date']) }}>
@error($attributes->get('wire:model'))
    <span class="form-text text-danger">{{ $message }}</span>
@enderror
