<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>E Commerce</title>
</head>

<body>
    <div class="min-h-screen">
        <!-- Nav -->
        @include('layouts.navigation')
        
        <main>
            @yield('content')
        </main>
        
        <!-- Footer -->
        <div class="bottom-0 relative w-full">
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
