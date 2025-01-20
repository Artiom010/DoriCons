<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <!-- <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Contact Us</title>
</head>

<body style="background-image: url(bgk.jpg);">
    <header class="bg-transparent py-4">
        <nav class="flex items-center justify-center px-4">
            <!-- Logo -->
            <img src="logo.png" alt="LOGOTIP" class="w-24 h-24 mr-20">

            <div class="font-montserrat hidden md:flex space-x-10 ml-6" style="align-items: center;">
                <a href="/" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Despre Noi</a>
                <a href="/about" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Servicii de Construcție</a>
                <a href="/agents" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Proiectele Noastre</a>
                <a href="/services" style="background: none;" class="text-gray-800 font-medium text-sm hover:text-green-500">Sustenabilitate și Inovație</a>
                <!-- Adaugă stiluri pentru aliniere și spațiu -->
                <a href="tel:+37379804176" class="ml-16 px-6 py-2 rounded-full bg-green-500 text-white text-sm font-semibold hover:bg-green-600 inline-flex items-center space-x-2">
                    <span>Sună Acum</span>
                    <i class="fa fa-phone"></i>
                </a>
            </div>



            <!-- Butonul hamburger pentru mobil -->
            <div class="md:hidden flex items-center ml-6">
                <button id="hamburger-btn" class="text-gray-800 text-2xl focus:outline-none">
                    &#9776; <!-- Simbolul pentru meniul hamburger -->
                </button>
            </div>
        </nav>

        <!-- Meniul de navigare pe mobil (ascuns inițial) -->
        <div style="background-image: url(bgk.jpg);" id="mobile-menu" class="font-montserrat md:hidden hidden bg-white text-center py-4">
            <a href="/" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Despre Noi</a>
            <a href="/about" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Servicii de Construcție</a>
            <a href="/agents" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Proiectele Noastre</a>
            <a href="/services" class="block text-gray-800 font-medium text-sm py-2 hover:text-green-500">Sustenabilitate și Inovație</a>
            <a href="tel:+37379804176" class="ml-15 px-6 py-2 rounded-full bg-green-500 text-white text-sm font-semibold hover:bg-green-600 inline-flex items-center space-x-2"><span>Sună Acum</span>
                <i class="fa fa-phone"></i></a>
        </div>
    </header>

    <script>
        // Script pentru a deschide/închide meniul de pe mobil
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const callNowBtn = document.getElementById('call-now-btn');

        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>




    <!-- 
    <div class="">
        <h2>Your Ultimate Booking Solution</h2>
        <p>Manage your bookings easily and efficiently with our app.</p>
    </div>

    <div class="">
        <h2>How It Works</h2>
        <p>With our app, you can easily manage your bookings, check availability, and much more. Get started today!</p>
    </div>

    <footer>
        <p>&copy; 2024 My Booking App. All rights reserved.</p>
    </footer> -->
</body>

</html>