@extends('template.template')
@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/pic2.PNG') }}" alt="">

            <h3 class="mt-5" style="color: #806e4f !important;">SUIT</h3>
            <p class="lookBookP">For wedding or business occasion, we make modern and classic fit suit.
                Shirt: Inner for Fullset suit that made from cotton. Tailored & customized for you as well</p>
            <img class="mt-5" src="{{ asset('images/services/pic1.PNG') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic2.PNG') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic3.PNG') }}" alt="">
            <br>
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
