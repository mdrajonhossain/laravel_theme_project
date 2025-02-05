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
                <button class="text-gray-700 focus:outline-none lg:hidden">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>

                <!-- Center: Logo -->
                <a href="{{ url('/') }}"
                    class="sm:static sm:translate-x-0 absolute left-1/2 transform -translate-x-3/4 md:mx-0">
                    <img src="https://htbazar.com/cdn/shop/files/Ht_logo_new-02_ccfcfe03-56c0-40d3-b9aa-dee4d96c5965.png?v=1684224625&width=1500"
                        alt="Logo" class="h-8 w-full sm:h-10 md:h-14">
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden md:hidden lg:flex space-x-6 font-bold text-[20px]"
                    style="font-family: 'Reem Kufi Fun', 'sans-serif';">
                    <li><a href="/" class="text-black hover:text-gray-900">HOME</a></li>
                    <li>
                        <a href="/collections/all" class="text-black hover:text-gray-900">PRODUCTS
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                    </li>
                    <li><a href="/collections/best-selling-products" class="text-black hover:text-gray-900">BEST
                            SELLING</a></li>
                    <li><a href="/pages/about" class="text-black hover:text-gray-900">ABOUT</a></li>
                    <li><a href="/pages/contact" class="text-black hover:text-gray-900">CONTACT</a></li>
                </ul>

                <!-- Right: Search & Cart Icons -->
                <div class="flex items-center space-x-4">
                    <button
                        class="text-gray-700 border border-gray-400 w-10 h-10 flex items-center justify-center rounded-full transition duration-300 hover:bg-green-500 hover:text-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <a href="/cart"
                        class="relative text-gray-700 border border-gray-400 w-10 h-10 flex items-center justify-center rounded-full transition duration-300 hover:bg-green-500 hover:text-white">
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


        <!-- Jumbotron Content -->
        <div class="relative w-full h-[600px] bg-gray-100">
            <img src="https://htbazar.com/cdn/shop/files/receiving-shipping-box-on-ipad.jpg?v=1694388726&width=2800"
                alt="Product" class="w-full h-full object-cover rounded-lg">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                <h1 class="text-5xl font-bold mb-4">Welcome to Our Shop!</h1>
                <p class="text-xl mb-6">Explore our amazing products and enjoy great deals!</p>
                <button class="bg-teal-800 text-white px-6 py-2 rounded-lg text-lg">Shop Now</button>
            </div>
        </div>




        <div class="flex flex-wrap container mx-auto justify-between pt-20 pb-20">
            <!-- Column 1 -->
            <div class="w-full sm:w-1/3 p-4 relative">
                <img src="https://htbazar.com/cdn/shop/files/C10A19D4-EFBF-4986-81C3-25DA1B852627.jpg?v=1738249284&width=1000"
                    alt="Product" class="w-full h-80 rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 text-white text-center py-20 px-6">
                    <h3 class="text-xl font-semibold">Combo Offer 1</h3>
                    <p class="text-gray-300 mt-2">Save 20% on your first purchase!</p>
                    <button class="bg-teal-500 text-white py-3 px-6 mt-4 rounded-lg text-xl font-semibold">Shop
                        Now</button>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="w-full sm:w-1/3 p-4 relative">
                <img src="https://htbazar.com/cdn/shop/files/0C0F7145-6485-4896-A9BD-F0B96B6E787C.jpg?v=1738249270&width=1000"
                    alt="Product" class="w-full h-80 rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 text-white text-center py-20 px-6">
                    <h3 class="text-xl font-semibold">Combo Offer 2</h3>
                    <p class="text-gray-300 mt-2">Get free shipping on orders above $50!</p>
                    <button class="bg-teal-500 text-white py-3 px-6 mt-4 rounded-lg text-xl font-semibold">Shop
                        Now</button>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="w-full sm:w-1/3 p-4 relative">
                <img src="https://htbazar.com/cdn/shop/files/CD03244A-0726-4E2F-955A-BC9C07A76288.jpg?v=1738248928&width=1000"
                    alt="Product" class="w-full h-80 rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 text-white text-center py-20 px-6">
                    <h3 class="text-xl font-semibold">Combo Offer 3</h3>
                    <p class="text-gray-300 mt-2">Buy 1 get 1 free on select items!</p>
                    <button class="bg-teal-500 text-white py-3 px-6 mt-4 rounded-lg text-xl font-semibold">Shop
                        Now</button>
                </div>
            </div>
        </div>


 




        <div class="flex flex-wrap container mx-auto gap-1 sm:gap-6 md:gap-8 lg:gap-10 justify-between mt-8 mb-8 p-4 sm:p-6">
    
    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

    <div class="w-full sm:w-1/2 lg:w-1/6 p-4 h-40 bg-teal-400 hover:text-white hover:bg-teal-800 cursor-pointer rounded-md text-[20px] sm:text-[25px] md:text-[25px] text-center flex flex-col items-center justify-center">
        <i class="fa-solid fa-cart-plus mb-2"></i>
        <div>add to cart</div>
    </div>

</div>











        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Trending Products</h1>
            <div class="grid md:grid-cols-4 gap-6">

                <!-- Product Card 1 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/7-hole-cable-organizer-874.webp?v=1736615382&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/calculator-ruler-10-cm-254.webp?v=1736617618&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/16E3E1EB-807A-4240-B4EA-765831F549E8.jpg?v=1738685431&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>



                <!-- Product Card 1 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/7-hole-cable-organizer-874.webp?v=1736615382&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/calculator-ruler-10-cm-254.webp?v=1736617618&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/16E3E1EB-807A-4240-B4EA-765831F549E8.jpg?v=1738685431&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>



                <!-- Product Card 1 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/7-hole-cable-organizer-874.webp?v=1736615382&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/calculator-ruler-10-cm-254.webp?v=1736617618&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>


                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 cursor-pointer group relative">
                    <div class="relative">
                        <img src="https://htbazar.com/cdn/shop/files/16E3E1EB-807A-4240-B4EA-765831F549E8.jpg?v=1738685431&width=1500"
                            alt="Product" class="w-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 w-full bg-green-900 hover:bg-green-700 text-white text-center h-16 opacity-0 transform translate-y-10 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-700 ease-out">
                            <div class="text-xl uppercase p-5">
                                <i class="fa-solid fa-cart-plus"></i> add to cart
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold mt-4">Nose Cleaner Sniffing Equip... 650.00Tk990.00Tk</h2>
                    <p class="text-gray-600">$29.99</p>
                </div>




            </div>
        </div>
    </div>







    <!-- Mobile Footer -->
    <div class="fixed bottom-0 left-0 w-full bg-white shadow-md border-t border-gray-300 lg:hidden">
        <div class="flex justify-around items-center py-3 text-gray-700">

            <!-- Categories -->
            <a href="https://htbazar.com/categories" class="flex flex-col items-center">
                <i class="fas fa-th text-xl"></i>
                <span class="text-xs">Categories</span>
            </a>

            <!-- Wholesale -->
            <a href="https://htbazar.com/collections/wholesale-price-1" class="flex flex-col items-center">
                <i class="fas fa-store text-xl"></i>
                <span class="text-xs">Wholesale</span>
            </a>

            <!-- Home -->
            <a href="/" class="flex flex-col items-center">
                <i class="fas fa-home text-xl"></i>
                <span class="text-xs">Home</span>
            </a>

            <!-- Offer -->
            <a href="https://htbazar.com/collections/campaign" class="flex flex-col items-center">
                <i class="fas fa-tags text-xl"></i>
                <span class="text-xs">Offer</span>
            </a>

        </div>
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
                        <li><a href="/collections/all" class="hover:text-gray-300">Products</a></li>
                        <li><a href="/pages/about" class="hover:text-gray-300">About</a></li>
                        <li><a href="/pages/contact" class="hover:text-gray-300">Contact</a></li>
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




</body>

</html>