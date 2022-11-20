@extends('layout.layout')
<style>
    #dev_icon:hover{
        color:red;
    }
</style>
@section('content')
@include('inc.nav')

<div class="w-100 d-flex justify-content-end head">
    <div class="d-flex w-50">
        <h3>The Dumagat<h3>
    </div>
</div>
<div class="w-100 d-flex justify-content-end subtext">
    <div class="w-50">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            <br>
            <br>
            <br>
            <a href="/about"> LEARN MORE</a>
        </p>
    </div>
</div>


<div class="row text-white" style="position:absolute; bottom:0px; right:10px; z-index:9999;">
    <div class="col" >
        <h6 style="display:none;" id="dev_tooltip">Developers</h6>
    </div>
    <div class="col pe-2 ps-0 m-0" id="dev_icon" >
        <a href="/developers" style="text-decoration:none; color:white;"><h5 class="bi bi-code-slash" ></h5></a>
    </div>
</div>

@endsection

@section('script')
<script>
    var dev_icon = document.getElementById("dev_icon")
    var dev_tooltip = document.getElementById("dev_tooltip")

    dev_icon.addEventListener("mouseover", ()=>{
        var dev_tooltip = document.getElementById("dev_tooltip")
        dev_tooltip.style.display = 'block'
    })

    dev_tooltip.addEventListener("mouseover", ()=>{
        var dev_tooltip = document.getElementById("dev_tooltip")
        dev_tooltip.style.display = 'block'
    })

    dev_icon.addEventListener("mouseleave", ()=>{
        var dev_tooltip = document.getElementById("dev_tooltip")
        dev_tooltip.style.display = 'none'
    })

</script>
@endsection
