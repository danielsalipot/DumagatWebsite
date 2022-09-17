@extends('layout.layout')

@section('content')
    <div class="card shadow-lg mx-auto my-5 w-75">
        <div class="w-100 rounded-top" style="
            height:300px;
            background-image:url({{ URL::to('/images/about/about_header.jpg') }});
            background-repeat: no-repeat;
            background-size:cover;
            ">
        </div>
        <div class="row m-3">
            <p class="display-5 mb-5 text-dark">Dumagat Tribe</p>

            {{-- FIRST PARAGRAPH --}}
            <div class="row my-4">
                <p class="w-50 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                <img src="{{ URL::to('/images/about/about_header.jpg') }}" class="w-50 h-100 rounded shadow-sm p-0">
            </div>

            {{-- SECOND PARAGRAPH --}}
            <div class="row my-2">
                <p class="w-100 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
            </div>

            {{-- THIRD PARAGRAPH --}}
            <div class="row my-4">
                <video class="w-50 h-100 rounded"  controls>
                    <source src="{{ URL::to('/images/about/tree_climbing.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
                </video>
                <p class="w-50 lh-lg mt-1">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
            </div>


            {{-- FOURTH PARAGRAPH --}}
            <div class="row ms-1 my-4">
                <img src="{{ URL::to('/images/about/picture5.jpg') }}" class="rounded shadow-sm p-0 h-100" style="width: 21%">
                <p class="w-75 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape. Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face</p>
            </div>

            {{-- FIFTH PARAGRAPH --}}
            <div class="row my-4">
                <p class="w-100 lh-lg">Indigenous peoples live in all regions of the world and own, occupy or use some 22% of global land area. Numbering at least 370-500 million, indigenous peoples represent the greater part of the world’s cultural diversity, and have created and speak the major share of the world’s almost 7000 languages. Many indigenous peoples continue to be confronted with marginalization, extreme poverty and other human rights violations. Through partnerships with indigenous peoples, UNESCO seeks to support them in addressing the multiple challenges they face, while acknowledging their significant role in sustaining the diversity of the world’s cultural and biological landscape.</p>
                <div class="row my-2 text-center">
                    <div class="col">
                        <img src="{{ URL::to('/images/about/picture2.jpg') }}" class=" w-100 h-100 rounded shadow-sm p-0">
                    </div>
                    <div class="col">
                        <img src="{{ URL::to('/images/about/picture3.jpg') }}" class=" w-100 h-100 rounded shadow-sm p-0">
                    </div>
                    <div class="col">
                        <img src="{{ URL::to('/images/about/picture4.jpg') }}" class=" w-100 h-100 rounded shadow-sm p-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
