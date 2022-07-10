<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
          <link rel="icon" type="image/x-icon" href="/images/favicon.png">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('fonts/css/all.min.css')}}">

        <link rel="stylesheet" href="{{mix('css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
        @livewireStyles
        <style>
            [x-cloack] {display: none;}
            html,body{
                scroll-behavior: smooth;
            }
        </style>
        <script src="{{asset('js/app.js')}}" defer></script>
        {{ $styles?? null }}
        <title>{{$title ?? 'Home'}} | Beth Rapha Cancer Foundation Kenya</title>
    </head>

    <body  x-data="{showMobileMenu: false}">

       {{ $slot }}

        @include('layouts.partials.footer')

       {{ $scripts?? null }}
        @livewireScripts
    </body>
</html>
