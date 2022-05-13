@extends('template.template')

@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">FABRIC CATALOGUE</h3>
            <h3 class="mt-5" style="color: white; font-family: 'EB Garamond', serif;font-weight:700;letter-spacing:2px;">SEMI-WOOL</h3>
            <img class="mt-2" style="width: 100%" src="{{ asset('images/fabric_catalogue/semiwool2.PNG') }}"
                alt="">

            <p style="text-align: left" class="mt-5">Semiwool came from 50-70% wool and mixture from another
                fabrics. They have soft feeling and good warmth , yet luxurious feels</p>

            <img class="mt-5 w-100" src="{{ asset('images/1.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/2.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/3.PNG') }}" alt="">
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
