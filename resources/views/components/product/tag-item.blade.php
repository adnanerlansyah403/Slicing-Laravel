@props(['color' => 'blue'])
@dd($color)
<li class="active">
    {{ $color }}
    <a href="#">{{ $tag }}</a>
    {{ $slot }}
</li>