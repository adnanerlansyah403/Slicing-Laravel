@props([
    // 'content',
])
<span 
{{ $attributes }}
{{-- {{ $attributes->merge(['class' => $classes]) }} --}}
{{-- {{ $attributes->filter(fn (string $value, string $key) => $key == 'foo') }} --}}
{{-- $attributes->has(['name', 'class']) --}}
{{-- $attributes->has('name') --}}
>
    {{ $content }}
    {{-- @if ($slot->isEmpty())
        Slot is empty
    @else
        {{ $slot }}
    @endif --}}
</span>