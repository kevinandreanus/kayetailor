@extends('template.template')

@push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
@endpush

<div class="container">

    <div class="text-center" style="margin-top: 100px; margin-bottom: 20px">
        <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($blog->title) }}</h3>
        <h3 style="color:gray;font-size:20px;" class="mt-1">{{ $blog->date_string }}</h3>
    </div>

    @foreach ($content as $key => $b)
        @if ($b->type == 'image')
            <div class="text-center mt-2">
                <img src="/{{ $b->image_path }}" alt="">
            </div>
        @else
            @if ($content[$key - 1]->type == 'image')
                <div class="text-justify mt-4">
                    <p>{{ $b->text }}</p>
                </div>
            @else
                <div class="text-justify">
                    <p>{{ $b->text }}</p>
                </div>
            @endif
        @endif
    @endforeach

</div>
@push('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
@endpush
