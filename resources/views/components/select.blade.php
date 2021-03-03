@props(['items', 'placeholder'])

<select id="{{ $attributes->get('wire:model') }}" {{ $attributes->merge(['class' => 'custom-select form-control']) }}>
    <option value="" selected>--- {{ __('Choose') }} {{ __($placeholder) }} ---</option>
    @foreach ($items ?: [] as $item)
        <option value="{{ $item->id }}">{{ __($item->name) }}</option>
    @endforeach
</select>
@error($attributes->get('wire:model'))
    <span class="form-text text-danger">{{ $message }}</span>
@enderror
