<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{ asset('image/LOGO tab.png') }}" type="image/x-icon">
    <title>GooCare</title>
</head>
        <body class="d-flex flex-column h-100 text-gray-800 bg-[#0367fc]">
            @include('layouts/header')
            <main class="flex-shrink-0">
                <div class="container">
                    @yield('content')
                </div>
            </main>
            @include('layouts/footer')
            <script src="/js/bootstrap.bundle.min.js"></script>
        </body>
</html>