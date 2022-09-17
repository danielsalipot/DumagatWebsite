@extends('layout.layout')

@section('content')
@include('inc.nav')

<div class="w-100 d-flex justify-content-end head">
    <div class="d-flex w-50">
        <h3>The Dumagat<h3>
    </div>
</div>
<div class="w-100 d-flex justify-content-end subtext">
    <div class="d-flex w-50">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            <br>
            <br>
            <br>
            <a href="#"> LEARN MORE</a>
        </p>
    </div>
</div>

<div class="d-flex">
    <video autoplay muted loop id="myVideo" class="bgvid">
        <source src="\assets\bg.mp4" type="video/mp4">
    </video>
</div>


@endsection
