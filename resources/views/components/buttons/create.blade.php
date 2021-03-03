@props(['href', 'title'])

@if (isset($href))
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-sm btn-light-primary font-weight-bolder']) }}>
        {{ __('Create') }} {{ $title }}
    </a>
@else
    <button type="button" {{ $attributes->merge(['class' => 'btn btn-sm btn-light-primary font-weight-bolder']) }}>
        {{ __('Create') }} {{ $title }}
    </button>
@endif
