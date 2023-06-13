@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ URL::to('/css/formStep.css') }}">
    <link rel="stylesheet" href="{{ URL::to('/css/assessment.css') }}">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-10 r p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 shadow-lg" style="background: #ffffff">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/success.png') }}" alt="">
                            <h2 id="heading">Congratulation! You have answered all the quiz question.</h2>
                            <h2 id="heading">You got correct {{ $data }} of 10 answer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
