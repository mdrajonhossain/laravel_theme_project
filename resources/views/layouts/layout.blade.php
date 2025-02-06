<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">

                <!-- Left: Toggle Button (Mobile) -->
                <button id="toggleBtn" class="text-gray-700 focus:outline-none lg:hidden">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>

                <!-- Center: Logo -->
                <a href="{{ url('/') }}"
                    class="sm:static sm:translate-x-0 absolute left-1/2 transform -translate-x-3/4 md:mx-0">
                    <img src="https://htbazar.com/cdn/shop/files/Ht_logo_new-02_ccfcfe03-56c0-40d3-b9aa-dee4d96c5965.png?v=1684224625&width=1500"
                        alt="Logo" class="h-8 w-full sm:h-10 md:h-14">
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden md:hidden lg:flex space-x-6 font-bold text-[16px]"
                    style="font-family: 'Reem Kufi Fun', 'sans-serif';">
                    <li>
                        <a href=""
                            class="relative text-black hover:text-gray-900 transition-all duration-300 pb-1 group hover:text-teal-800">HOME
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[3px] bg-teal-800 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" id="toggleBtn"
                            class="relative text-black hover:text-gray-900 transition-all duration-300 pb-1 group hover:text-teal-800">PRODUCTS
                            <i class="fa-solid fa-angle-down"></i>
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[3px] bg-teal-800 transition-all duration-300 group-hover:w-full"></span>
                        </a>

                        <div id="content"
                            class="absolute bg-gray-100 top-[90px] left-0 shadow-xl p-4 rounded-md w-full opacity-0 scale-95 invisible transition-all duration-300">
                            <div class="flex flex-wrap gap-5">
                                <div><a href="#" class="block p-2 text-black hover:bg-gray-200 rounded">Menu
                                        Item 1</a></div>
                                <div><a href="#" class="block p-2 text-black hover:bg-gray-200 rounded">Menu
                                        Item 2</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 3</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 4</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 5</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 6</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 7</a></div>
                                <div><a href="#" class="block p-2 text-black rounded">Menu
                                        Item 8</a></div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a href=""
                            class="relative text-black hover:text-gray-900 transition-all duration-300 pb-1 group hover:text-teal-800">BEST
                            SELLING
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[3px] bg-teal-800 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="relative text-black hover:text-gray-900 transition-all duration-300 pb-1 group hover:text-teal-800">ABOUT
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[3px] bg-teal-800 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="relative text-black hover:text-gray-900 transition-all duration-300 pb-1 group hover:text-teal-800">CONTACT
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[3px] bg-teal-800 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </li>
                </ul>

                <!-- Right: Search & Cart Icons -->
                <div class="flex items-center space-x-4">
                    <button
                        class="text-gray-700 border border-gray-400 w-10 h-10 flex items-center justify-center rounded-full transition duration-300 hover:bg-teal-800 hover:text-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <a href="/cart"
                        class="relative text-gray-700 border border-gray-400 w-10 h-10 flex items-center justify-center rounded-full transition duration-300 hover:bg-teal-800 hover:text-white">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span
                            class="absolute -top-1 -right-2 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">0</span>
                        <!-- animate-ping opacity-75 -->
                    </a>
                </div>

            </div>
        </div>
    </nav>


    <!-- Body Section -->
    <div class="pt-20 pb-20 opacity-2 animate-fadeInUp">
        @yield('content')
    </div>




    <!-- Mobile Footer -->
    <div class="fixed z-80 bottom-0 left-0 w-full bg-white shadow-md border-t border-gray-300 lg:hidden">
        <div class="flex justify-around items-center py-3 text-gray-700">

            <!-- Categories -->
            <a id="toggleBtn" class="flex flex-col items-center">
                <i class="fas fa-th text-xl"></i>
                <span class="text-xs">Categories</span>
            </a>

            <!-- Wholesale -->
            <a href="" class="flex flex-col items-center">
                <i class="fas fa-store text-xl"></i>
                <span class="text-xs">Wholesale</span>
            </a>

            <!-- Home -->
            <a href="/" class="flex flex-col items-center">
                <i class="fas fa-home text-xl"></i>
                <span class="text-xs">Home</span>
            </a>

            <!-- Offer -->
            <a href="" class="flex flex-col items-center">
                <i class="fas fa-tags text-xl"></i>
                <span class="text-xs">Offer</span>
            </a>

        </div>
    </div>



    <!-- mobile site site menu -->
    <div id="sideMenu"
        class="fixed top-0 left-0 z-50 h-[92vh] w-full max-w-md bg-teal-500 shadow-lg p-6 transform -translate-x-full transition-transform duration-500">
        <div id="closeBtn"
            class="absolute top-2 right-4 w-8 h-8 bg-red-500 text-white flex justify-center items-center rounded-full">
            <i class="fas fa-times"></i> <!-- FontAwesome close icon -->
        </div>
        <ul class="space-y-2 mt-10">
            <li><a href="#" class="block p-2 bg-white text-black hover:bg-gray-200 rounded">Menu Item 1</a></li>
            <li><a href="#" class="block p-2 bg-white text-black hover:bg-gray-200 rounded">Menu Item 2</a></li>
            <li><a href="#" class="block p-2 bg-white text-black hover:bg-gray-200 rounded">Menu Item 3</a></li>
        </ul>
    </div>






    <!-- web Footer -->
    <footer class="bg-gray-800 text-white mt-10 hidden md:hidden lg:block lx:block 2lx:block">
        <div class="container mx-auto px-6 py-10">
            <div class="flex flex-col md:flex-row justify-between">
                <div>
                    <h2 class="text-lg font-semibold">HT Bazar</h2>
                    <p class="mt-2 text-gray-400">Best Online Store for Quality Products.</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Quick Links</h2>
                    <ul class="mt-2 space-y-2">
                        <li><a href="/" class="hover:text-gray-300">Home</a></li>
                        <li><a href="" class="hover:text-gray-300">Products</a></li>
                        <li><a href="" class="hover:text-gray-300">About</a></li>
                        <li><a href="" class="hover:text-gray-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Follow Us</h2>
                    <div class="flex mt-2 space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 text-center py-4">
            <p class="text-gray-400">&copy; 2025 HT Bazar. All rights reserved.</p>
        </div>
    </footer>



    <script>
    // <!-- mobile site site menu start -->
    const toggleBtn = document.getElementById("toggleBtn");
    const closeBtn = document.getElementById("closeBtn");
    const sideMenu = document.getElementById("sideMenu");

    toggleBtn.addEventListener("click", () => {
        sideMenu.classList.remove("-translate-x-full");
        sideMenu.classList.add("translate-x-0");
    });

    closeBtn.addEventListener("click", () => {
        sideMenu.classList.remove("translate-x-0");
        sideMenu.classList.add("-translate-x-full");
    });
    // <!-- mobile site site menu end -->


    document.addEventListener("DOMContentLoaded", function() {
        let toggleBtn = document.getElementById("toggleBtn");
        let content = document.getElementById("content");
        let hideTimeout;

        toggleBtn.addEventListener("mouseenter", function() {
            clearTimeout(hideTimeout);
            content.classList.remove("opacity-0", "scale-95", "invisible");
            content.classList.add("opacity-100", "scale-100", "visible");
        });

        content.addEventListener("mouseenter", function() {
            clearTimeout(hideTimeout);
        });

        toggleBtn.addEventListener("mouseleave", hideMenu);
        content.addEventListener("mouseleave", hideMenu);

        function hideMenu() {
            hideTimeout = setTimeout(function() {
                content.classList.remove("opacity-100", "scale-100", "visible");
                content.classList.add("opacity-0", "scale-95", "invisible");
            }, 100);
        }
    });
    </script>
</body>

</html>