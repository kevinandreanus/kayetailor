@extends('template.template')
@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/shirt.PNG') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">SHIRT</h3>
            <p class="center-justified">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Duis autem vel eum.</p>
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
