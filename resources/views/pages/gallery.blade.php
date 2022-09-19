@extends('layout.layout')

@section('content')

<style>
    body{
        overflow-y: scroll;
    }
</style>
<div class="d-flex" style="position: fixed; width:110%">
    <video autoplay muted loop id="myVideo" class="bgvid">
        <source src="\assets\bg.mp4" type="video/mp4">
    </video>
</div>

<div class="row">
    <br>
    <br>

    <div class="logo">
    <a href="homepage.html"><img src="giflogo.gif"></a>
    </div>

</div>



<center>
<div class="container ">
    <img src="images\gallery\gallery1.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery1.jpg">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nisi optio perferendis dicta, sunt provident quibusdam cum modi aut porro quae fuga tempora eligendi minus eos blanditiis, enim inventore dolorem!
                </div>
            </a>
    </div>
</div>
<div class="container ">
    <img src="images\gallery\gallery2.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery2.jpg"><div class="text">
        </div></a>
    </div>
</div>
<div class="container ">
    <img src="images\gallery\gallery3.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery3.jpg"><div class="text">
        </div></a>
    </div>
</div>
</center>

<center>
<div class="container ">
    <img src="images\gallery\gallery4.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery4.jpg"><div class="text">
        </div></a>
    </div>
</div>
<div class="container ">
    <img src="images\gallery\gallery5.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery5.jpg"><div class="text">
        </div></a>
    </div>
</div>
<div class="container ">
    <img src="images\gallery\gallery6.jpg" class="image">
        <div class="overlay overlayLeft"> 
            <a href="images\gallery\gallery6.jpg"><div class="text">
        </div></a>
    </div>
</div>
</center>


<center>
    <div class="container ">
        <img src="images\gallery\gallery7.jpg" class="image">
            <div class="overlay overlayLeft"> 
                <a href="images\gallery\gallery7.jpg"><div class="text">
            </div></a>
        </div>
    </div>
    <div class="container ">
        <img src="images\gallery\gallery8.jpg" class="image">
            <div class="overlay overlayLeft"> 
                <a href="images\gallery\gallery8.jpg">
                    <div class="text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda architecto odit incidunt aperiam obcaecati vero provident aliquid at perspiciatis totam nulla ratione adipisci repellendus, ea iure culpa facere labore repudiandae.
                    </div>
                </a>
        </div>
    </div>
    <div class="container ">
        <img src="images\gallery\gallery9.jpg" class="image">
            <div class="overlay overlayLeft"> 
                <a href="images\gallery\gallery9.jpg"><div class="text">
            </div></a>
        </div>
    </div>
</center>




@endsection