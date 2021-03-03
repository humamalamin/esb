<textarea id="{{ $attributes->get('wire:model') }}"
    {{ $attributes->merge(['class' => 'form-control min-h-75px', 'row' => 3]) }}>
    </textarea>
@error($attributes->get('wire:model'))
    <span class="form-text text-danger">{{ $message }}</span>
@enderror
