@extends('template.template')
@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/trouser.png') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">TROUSER</h3>
            <p class="lookBookP">made by yours truly so you can use as well for business occasion or casual look</p>
            <img class="mt-5" src="{{ asset('images/services/pic1.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic2.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic3.png') }}" alt="">
            <br>
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
