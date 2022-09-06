@extends('template.template')

@push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        @media only screen and (max-width: 600px) {
            #desktopviewz {
                display: none !important;
            }
        }

        @media screen and (min-width: 800px) {
            #mobileviewz {
                display: none !important;
            }

            .bannertopz {
                position: relative;
                text-align: center;
            }

            .centered {
                position: absolute;
                top: 92%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .bottom-right {
                position: absolute;
                bottom: -80px;
                right: 16px;
            }
        }
    </style>
@endpush

<div id="desktopviewz">
    <div class="bannertopz">
        <img src="/{{ $blog->back_image_path }}" alt="" width="100%" style="height: 650px;">
        <div class="centered">
            <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">BLOGS</h3>
        </div>
        <div class="bottom-right">
            <img src="{{ asset('images/yakk.png') }}" alt="" style="height: 240px">
        </div>
    </div>
    <div class="container">
        <div class="text-center" style="margin-top: 100px; margin-bottom: 20px">
            <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($blog->title) }}</h3>
            <h3 style="color:gray;font-size:20px;" class="mt-1">{{ $blog->date_string }}</h3>
        </div>
        <hr style="background-color: #806e4f; opacity: 100">

        @foreach ($content as $key => $b)
            @if ($b->type == 'image')
                <div class="text-center mt-2">
                    <img src="/{{ $b->image_path }}" alt="">
                </div>
            @else
                @if ($content[$key]->type == 'image')
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
</div>

<div class="container" id="mobileviewz">

    <div class="text-center" style="margin-top: 100px; margin-bottom: 20px">
        <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($blog->title) }}</h3>
        <h3 style="color:gray;font-size:20px;" class="mt-1">{{ $blog->date_string }}</h3>
    </div>
    <hr style="background-color: #806e4f; opacity: 100">

    @foreach ($content as $key => $b)
        @if ($b->type == 'image')
            <div class="text-center mt-2">
                <img src="/{{ $b->image_path }}" alt="">
            </div>
        @else
            @if ($content[$key]->type == 'image')
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
