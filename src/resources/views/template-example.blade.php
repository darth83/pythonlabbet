<!DOCTYPE html>
<html class="bg-gray-50" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @include('css')
        <link rel="stylesheet" type="text/css" href="/css/prism-vs.css">
        <link rel="stylesheet" data-name="vs/editor/editor.main" href="/monaco-editor/package/min/vs/editor/editor.main.css">
        @livewireStyles
        <style>
            .token.builtin { color: #0000ff; }
            .videoWrapper {
                position: relative;
                padding-bottom: 56.25%;
                /* 16:9 */
                padding-top: 25px;
                height: 0;
            }

            .videoWrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }    
        </style>
        <script>
            let editors = {};
        </script>
        @include('analytics')
    </head>

    <body class="antialiased bg-white border-b min-h-screen">
        @include('nav')

        <div class="max-w-screen-xl mx-auto">    
            <div class="px-2 sm:px-8 lg:px-48">
                @yield('content')
              
            </div>
            
        </div>
        @include('footer')
        
        @include('all-scripts')

    @include('modal')
    </body>
</html>
