<ul>
    @foreach ($tags as $tag)
        <x-product.tag-item :tag="$tag" />
    @endforeach
</ul>