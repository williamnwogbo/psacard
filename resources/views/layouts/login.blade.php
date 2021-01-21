<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Logo">
    <meta name="keywords" content="Admin Logo">
    <meta name="author" content="LEFT4CODE">
    <title>@yield('title')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/admin/css/app.css" />
    @livewireStyles
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="/" class="-intro-x flex items-center pt-5">
                <img alt="...." class="w-6" src="/admin/images/logo.svg">
                <span class="text-white text-lg ml-3"> PSA<span class="font-medium">Card</span> </span>
            </a>
            <div class="my-auto">
                <img alt="...." class="-intro-x w-1/2 -mt-16" src="/admin/images/illustration.svg">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Get the best prices
                    <br>
                    here with a simple search.
                </div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        @yield('content')
        <!-- END: Register Form -->
    </div>
</div>

<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
@livewireScripts
<script src="/admin/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>

