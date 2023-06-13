@extends('layout')
@section('content')
<header class="py-5">
    <div class="container ">
        <div class="row gx-5 align-items-center">
            {{-- <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Sales &middot; Marketing</div></div>
                    <div class="fs-3 fw-light text-muted">I can help your business to</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/company-post">Post Some Jobs?</a>
                       
                    </div>
                </div>
            </div> --}}
            <div class="col-xxl-12">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- test --}}
<div class="container">
    <div class="">
        <img class="profile-img" src="assets/photo1.jpg" width="100%" alt="..." />
    </div>
</div>
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-12">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span></h2>
                    <h5>Kami menyediakan berbagai artikel, dan game yang dapat membantu anak-anak memahami </h5>
                    <h5>pentingnya keamanan siber dan cara-cara untuk menjaganya. Website ini bertujuan untuk meningkatkan </h5>
                    <h5>kesadaran cybersecurity pada anak-anak. Kami menyediakan informasi dan sumber daya yang relevan untuk </h5>
                    <h5>membantu anak-anak memahami pentingnya keamanan online dan cara melindungi diri mereka sendiri saat menggunakan internet.</h5>
                  
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection
