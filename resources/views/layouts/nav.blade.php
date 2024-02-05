<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <script src="script.js" defer></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<header class="fixed bg-red-600 border-green-800 border-solid border-4 top-0 left-0 right-0 z-0 grid grid-rows-1 grid-cols-3 ">
    <div class="container mx-auto flex justify-between p-3 col-span-3">
        <h1 class="text-2xl text-white font-black col-span-1">Stonks Pizza</h1>

        <nav class="grid grid-rows-2 grid-cols-3 col-span-2">
            <a href="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Home</a>
            <a href="/menu" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Menu</a>
            <a href="/cart" class="block bg-orange-600 border-green-800 border-solid border-4 text-white p-5">
                <div class="flex items-center px-4">
                    <i class="bi bi-house-door-fill"></i>
                    <i class='bx bx-cart'></i>
                    <span class="text-[15px] ml-4 h-6 text-gray-200 font-bold">Winkelwagen</span>
                </div>
            </a>

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Manager<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                 class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="/ingrediënten/index"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ingrediënten</a>
                    </li>
                    <li>
                        <a href="/eenheden/index"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Eenheden</a>
                    </li>
                    <li>
                        <a href="/menu/index"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Menukaart</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<br>
<br>

<body class=bg-orange-200>
<main class="ml-[300px] p-4 mt-14">
    {{ $slot }}
</main>

<div class="grid bg-red-600 border-green-800 border-solid border-4 absolute inset-y-0 right-0 w-32 h-auto">

</div>

<br>
<br>
<footer class="fixed bottom-0 left-0 right-0 bg-red-600 border-green-800 border-solid border-4 p-4 text-center grid grid-rows-5 col-span-3 h-20">
    <div class="container mx-auto">
        <p>&copy;</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>
