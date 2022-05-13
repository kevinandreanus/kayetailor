@extends('template.template')
@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/alteration.png') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">ALTERATION</h3>
            <p class="center-justified">We believe every fabric from Kaye Brother's Tailor deserve more wearing time, whether
                you are getting bigger or slimmer, we can help re-adjust the size just for you</p>
            <img class="mt-5" src="{{ asset('images/services/alterpic.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic2.png') }}" alt="">
            <br>
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
