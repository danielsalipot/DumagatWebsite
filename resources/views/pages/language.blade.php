@extends('layout.layout')

@section('content')
<div class="w-100 mx-auto p-5" id="translator" style="height: 100vh">
    <div class="p-4"></div>
    <div class="card bg-transparent border-0">
        <div class="row w-75 mx-auto">
            <div class="col p-0 pb-4">
                <hr class="text-white">
                <h5 style="letter-spacing: 3px;" class="text-light w-100 text-center my-1">Filipino</h5>
                <hr class="text-white">
                <br>
                <textarea class="w-100 form-control text-white" id="toBeTranslated" style="background-color: rgba(70, 70, 70, 0.346)" rows="13" placeholder="Enter Text"></textarea>
            </div>
            <div class="col-1 p-0 m-0 text-center">
                <div class="bg-secondary h-100 mx-auto" style="width: 1px"></div>
            </div>
            <div class="col p-0 pb-4">
                <hr class="text-white">
                <h5 style="letter-spacing: 3px;" class="text-light w-100 text-center my-1">English</h5>
                <hr class="text-white">
                <br>
                <textarea class="w-100 form-control text-white" id="translatedText" style="background-color: rgba(70, 70, 70, 0.346)"  rows="13"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col text-center">
                <button class="btn btn-outline-light p-2 w-75" onclick="translateButtonClick()">Translate</button>
            </div>
            <div class="col text-end">
                <a class="text-light text-decoration-none" style="font-size: 30px" href="#dictionary">Go to Dictionary</i></a>
            </div>
        </div>
    </div>
</div>
<div class="p-5"></div>
<div class="card bg-dark rounded-0" id="dictionary" style="height: 100vh">
    <iframe src="https://tagalog.pinoydictionary.com/list/a/" class="w-100 h-100"></iframe>
    <a class="text-dark text-decoration-none" style="font-size: 30px; position: absolute; bottom: 10px; right: 30px; z-index:9999;" href="#translator">Go to Translator</i></a>
</div>


<script>
    function translateButtonClick(){
        var text = document.getElementById("toBeTranslated");
        const encodedParams = new URLSearchParams();
        encodedParams.append("q", text.value);
        encodedParams.append("target", "en");
        encodedParams.append("source", "tl");

        const options = {
            method: 'POST',
            headers: {
                'content-type': 'application/x-www-form-urlencoded',
                'Accept-Encoding': 'application/gzip',
                'X-RapidAPI-Key': 'e607fb8314mshdbdae80ed5c65fap1faf17jsn0d6ea8d28116',
                'X-RapidAPI-Host': 'google-translate1.p.rapidapi.com'
            },
            body: encodedParams
        };

        fetch('https://google-translate1.p.rapidapi.com/language/translate/v2', options)
            .then(response => response.json())
            .then(response => {
                var translatedText = document.getElementById("translatedText")
                var str = ''
                response.data.translations.forEach(element => {
                    str += element.translatedText + '\r\n'
                });

                translatedText.value = str;
            })
            .catch(err => console.error(err));
    }
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
