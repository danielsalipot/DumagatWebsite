@extends('layout.layout')

@section('content')
@include('inc.nav')
<style>
    body{
        overflow-y: scroll;
    }
    p {
        text-shadow: 1.5px 1.5px rgba(0, 0, 0, 0.2);
    }
</style>
    <div class="p-4"></div>
    <div class="card shadow-lg mx-auto my-5 w-75" style="background-color: #FFFBE9">
        <div class="row m-3">
            <p class="display-5  text-dark header w-100 text-center" style="background-color: #FFFBE9; color: #AD8B73">The Dumagat</p>
            <hr>
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">About</button>
                    <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Culture</button>
                    <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Environment</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show rounded-0 rounded-bottom active card" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">{{-- FIRST PARAGRAPH --}}
                    <div class="row m-4">
                        <p class="w-50 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                        <img src="{{ URL::to('/images/about/about_header.jpg') }}" class="w-50 h-100 rounded shadow-lg p-0">

                        {{-- SECOND PARAGRAPH --}}
                        <div class="row">
                            <p class="w-100 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade card rounded-0 rounded-bottom" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    {{-- THIRD PARAGRAPH --}}
                    <div class="row m-4">
                        <video class="w-50 h-100 rounded p-0 "  controls>
                            <source src="{{ URL::to('/images/about/tree_climbing.mp4') }}" class="p-0 m-0 h-100"type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                        <p class="w-50 lh-lg mt-1">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                    </div>

                    <div class="row m-4">
                        <p class="w-100 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                    </div>
                </div>
                <div class="tab-pane fade card rounded-0 rounded-bottom" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    {{-- FOURTH PARAGRAPH --}}
                    <div class="row m-4 ">
                        <img src="{{ URL::to('/images/about/picture5.jpg') }}" class="rounded  shadow-lg p-0 h-100" style="width: 21%">
                        <p class="w-75 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape. Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face</p>
                    </div>

                    {{-- FIFTH PARAGRAPH --}}
                    <div class="row m-4">
                        <p class="w-100 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                        <div class="row my-2 text-center">
                            <div class="col">
                                <img src="{{ URL::to('/images/about/picture2.jpg') }}" class=" w-100 h-100 rounded  shadow-lg p-0">
                            </div>
                            <div class="col">
                                <img src="{{ URL::to('/images/about/picture3.jpg') }}" class=" w-100 h-100 rounded  shadow-lg p-0">
                            </div>
                            <div class="col">
                                <img src="{{ URL::to('/images/about/picture4.jpg') }}" class=" w-100 h-100 rounded  shadow-lg p-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-3 p-3">
            <h6 class="w-100 p-1 rounded" style="color:#AD8B73;">Related News</h6>
            <hr class="p-0 m-0 text-primary">

            <div class="row w-100 mx-auto">
                <div class="col p-3 rounded p-0" >
                    <a href="" class="text-decoration-none p-0 h-100">
                        <img src="{{ URL::to('/images/about/meeting.jpg') }}" class="w-100 rounded-top">
                        <hr class="text-primary m-0">
                        <div class="p-0 m-0 bg-white p-2 text-center text-dark">September 21, 2022</div>
                        <h6 class="text-start text-white rounded-bottom p-3" style="background-color: #AD8B73">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo voluptatem laudantium doloribus id!</h6>
                    </a>
                </div>
                <div class="col p-3 rounded p-0" >
                    <a href="" class="text-decoration-none p-0 h-100">
                        <img src="{{ URL::to('/images/about/meeting.jpg') }}" class="w-100 rounded-top">
                        <hr class="text-primary m-0">
                        <div class="p-0 m-0 bg-white p-2 text-center text-dark">September 21, 2022</div>
                        <h6 class="text-start text-white rounded-bottom p-3" style="background-color: #AD8B73">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo voluptatem laudantium doloribus id!</h6>
                    </a>
                </div>
                <div class="col p-3 rounded p-0" >
                    <a href="" class="text-decoration-none p-0 h-100">
                        <img src="{{ URL::to('/images/about/meeting.jpg') }}" class="w-100 rounded-top">
                        <hr class="text-primary m-0">
                        <div class="p-0 m-0 bg-white p-2 text-center text-dark">September 21, 2022</div>
                        <h6 class="text-start text-white rounded-bottom p-3" style="background-color: #AD8B73">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo voluptatem laudantium doloribus id!</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
