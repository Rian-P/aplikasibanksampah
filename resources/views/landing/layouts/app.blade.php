<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>aplikasi bank sampah</title>
        

</head>
<body>
    <nav class="bg-green shadow">
        @include('landing.layouts.includes.navbar')
    </nav>

    <main>@yield('content')</main>

    <footer class=" bg-green text-black-100 body-font">
        @include('landing.layouts.includes.footer')
    </footer>
  
</body>
</html>