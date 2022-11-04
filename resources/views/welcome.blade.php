<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/js/app.js')
    </head>
    <body class="antialiased h-screen text-gray-400 bg-gray-900">
        <div class="mx-auto max-w-xl w-full space-y-6">
            <div class="flex items-center justify-between py-5">
                <h1 class="text-4xl text-gray-100 uppercase font-bold">TODO App</h1>

                <x-add-task />
            </div>

            <x-task id="1" title="Faire les courses" desc="fqdsqdsdsqds" />
            <x-task  id="2" title="Lire la doc sur les blade components" desc="sdkjqskdjqskdjksqkdkdjqksjdkqjs qskjdkqsjd kqsjd ksqdkjsqkdj qskdjqskdjksqjdksq jdkqsj dksqjd ksqjdksqjdksjd" />
        </div>
    </body>
</html>
