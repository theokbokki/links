<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="app">
        <div class="app__intro">
            <h1 class="app__title">Links</h1>
            <div class="app__subtitle">
                <p>I call the machine on this page a <span>LinkPod<span>.</p>
                <p>It’s purpose is to share links I find cool, so you can click on them and maybe find them cool as well :))</p>
            </div>
            <a href="#" class="app__link">Read more</a>
        </div>
        <x-linkpod/>
    </body>
</html>
