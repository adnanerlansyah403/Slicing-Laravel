@props([
    'color' => 'gray'
])
{{-- @dd($color) --}}
<ul>
    @foreach ($tags as $tag)
        <x-product.tag-item :tag="$tag" :color="$color" />
    @endforeach
</ul>