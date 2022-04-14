@extends('template.template')

@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;">FABRIC CATALOGUE</h3>
            <h3 class="mt-5" style="color: white">SEMI-WOOL</h3>
            <img class="mt-2" style="width: 100%" src="{{ asset('images/fabric_catalogue/semiwool2.PNG') }}"
                alt="">

            <p style="text-align: left" class="mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh
                euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Duis autem vel eum.</p>

            <img class="mt-5 w-100" src="{{ asset('images/1.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/2.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/3.PNG') }}" alt="">
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection