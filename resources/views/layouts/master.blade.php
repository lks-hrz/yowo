<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - YOWO</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#eaf7f7",
                        "text": "#5c7291"
                    },
                    "button": {
                        "background": "#56cbdb",
                        "text": "#ffffff"
                    }
                },
                "theme": "classic",
                "content": {
                    "href": "/impressum"
                }
            })});
    </script>
</head>
<body>
@include('partials.alerts')

@include('partials.navbar')

@include('partials.popup')

@yield("container")

@include('partials.footer')

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKCAd16LrWtO-lpJomY8gb2hYmb5Kd4Bw"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/js/app.js"></script>


</body>
</html>