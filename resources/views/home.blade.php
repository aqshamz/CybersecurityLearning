@extends('layout')
@section('content')
<title> Cybersecurity Learning </title>
<div class="header">
    <div class="navbar">
        <a href="/home" class="navbtn">HOME</a>
        <a href="/" class="navbtn">SIGN UP</a>
        <a href="/login" class="navbtn">LOGIN </a>
        <a href="https://www.getsafeonline.org/games/cybersense/" class="navbtn">GAME</a>
    </div>
</div>
<div class="content">
    <div class="atas">

        <div class="gambar">
            <h1>Selamat Datang Di Situs Web Kami Yang Bertujuan Untuk Meningkatkan Kesadaran Cybersecurity Untuk Anak-anak</h1>
            <img src="{{ asset('storage/7yearsold.jpg') }}" alt="Image">
        </div>
        <br>
        <div class="tulisan">
            <div></div>
        </div>
    </div>
    <div class="bawah">

        <div class="tulisanbawah">
            <div>Kami menyediakan berbagai artikel, dan game yang dapat membantu anak-anak memahami </div>
            <div>pentingnya keamanan siber dan cara-cara untuk menjaganya. Website ini bertujuan untuk meningkatkan </div>
            <div>kesadaran cybersecurity pada anak-anak. Kami menyediakan informasi dan sumber daya yang relevan untuk </div>
            <div>membantu anak-anak memahami pentingnya keamanan online dan cara melindungi diri mereka sendiri saat menggunakan internet.</div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="tf"><span class="tb">Pembelajaran Cyber Security</span></div>

</div>
</div>
@endsection
