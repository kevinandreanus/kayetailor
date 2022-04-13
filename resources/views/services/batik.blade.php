@extends('template.template')
@section('content')
    

<div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/batik.PNG') }}" alt="">

            <h3 class="mt-5" style="color: #806e4f !important;">BATIK</h3>
            <p class="lookBookP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Duis autem vel eum.</p>
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