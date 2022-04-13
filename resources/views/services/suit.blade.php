@extends('template.template')
@section('content')
    
@endsection
@push('custom-js')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: true,
                nav: false
            });
        });
    </script>
@endpush