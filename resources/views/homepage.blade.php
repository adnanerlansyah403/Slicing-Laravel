@extends("partials.layouts.app")

@section("title", "Homepage")

@section('sidebar')
    {{-- @parent --}}
 
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section("content")

<!-- Hero Section -->
@include('partials.pages.homepage.hero')

<!-- Popular Product -->
@include('partials.pages.homepage.popular-product')

<!-- Services -->
@include('partials.pages.homepage.service')

<!-- About Us -->
@include('partials.pages.homepage.about-us')

<!-- Products -->
@include('partials.pages.homepage.products')

<!-- Testimonial -->
@include('partials.pages.homepage.testimonial')

<!-- Subsribe -->
@include('partials.pages.homepage.subscribe')

@push('scripts')
    
<script type="text/javascript">
    function toggleHeaderClass() {
        var header = document.getElementById('header');
        var scrollPosition = window.pageYOffset;

        if (scrollPosition > 0) {
            header.classList.add('active');
        } else {
            header.classList.remove('active');
        }
    }

    window.addEventListener('scroll', function() {
        toggleHeaderClass();
    });
</script>

@endpush

@prepend('scripts')
    This will be first...
@endprepend

@endsection