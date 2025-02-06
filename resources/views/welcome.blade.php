@extends('layouts.layout')


@section('content')

<!-- Jumbotron Content -->
<div class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[500px] xl:h-[500px] 2xl:h-[500px] bg-gray-100">
    <img src="https://htbazar.com/cdn/shop/files/receiving-shipping-box-on-ipad.jpg?v=1694388726&width=2800"
        alt="Product" class="w-full h-full object-cover rounded-lg">
    <div
        class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white px-4">
        <h1 class="text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-4xl font-bold">
            Welcome to Our Shop!
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mb-6">
            Explore our amazing products and enjoy great deals!
        </p>
        <button class="bg-teal-800 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg text-sm sm:text-lg">
            Shop Now
        </button>
    </div>
</div>








<div class="flex flex-wrap container mx-auto justify-between pt-20 pb-20">
    <!-- Column 1 -->
    <div class="w-full sm:w-1/3 p-4 relative group overflow-hidden">
        <div class="overflow-hidden rounded-lg">
            <img src="https://htbazar.com/cdn/shop/files/C10A19D4-EFBF-4986-81C3-25DA1B852627.jpg?v=1738249284&width=1000"
                alt="Product" class="w-full h-80 rounded-lg transition-transform duration-300 group-hover:scale-125">
        </div>
        <div class="absolute bottom-0 left-0 right-0 text-white py-20 px-6">
            <h3 class="text-2xl text-white font-semibold ml-4 text-left">Combo Offer</h3>
            <button
                class="uppercase hover:bg-teal-800 hover:text-white bg-white text-black w-[200px] py-3 mt-4 rounded-lg text-xl font-semibold ml-4">Shop
                Now</button>
        </div>
    </div>

    <!-- Column 2 -->
    <div class="w-full sm:w-1/3 p-4 relative group overflow-hidden">
        <div class="overflow-hidden rounded-lg">
            <img src="https://htbazar.com/cdn/shop/files/0C0F7145-6485-4896-A9BD-F0B96B6E787C.jpg?v=1738249270&width=1000"
                alt="Product" class="w-full h-80 rounded-lg transition-transform duration-300 group-hover:scale-125">
        </div>
        <div class="absolute bottom-0 left-0 right-0 text-white py-20 px-6">
            <h3 class="text-2xl text-white font-semibold ml-4 text-left">50% Off</h3>
            <button
                class="uppercase bg-white hover:bg-teal-800 hover:text-white text-black w-[200px] py-3 mt-4 rounded-lg text-xl font-semibold ml-4">Shop
                Now</button>
        </div>
    </div>

    <!-- Column 3 -->
    <div class="w-full sm:w-1/3 p-4 relative group overflow-hidden">
        <div class="overflow-hidden rounded-lg">
            <img src="https://htbazar.com/cdn/shop/files/CD03244A-0726-4E2F-955A-BC9C07A76288.jpg?v=1738248928&width=1000"
                alt="Product" class="w-full h-80 rounded-lg transition-transform duration-300 group-hover:scale-125">
        </div>
        <div class="absolute bottom-0 left-0 right-0 text-white py-20 px-6">
            <h3 class="text-2xl text-white font-semibold ml-4 text-left">Stock clearance</h3>
            <button
                class="uppercase bg-white hover:bg-teal-800 hover:text-white text-black w-[200px] py-3 mt-4 rounded-lg text-xl font-semibold ml-4">Show
                all</button>
        </div>
    </div>
</div>







<div class="container mx-auto p-4 sm:p-6">
    <div
        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-1 sm:gap-6 md:gap-8 lg:gap-10 mb-3">

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Trending</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-headphones text-4xl mb-2"></i>
            <div>Gadget</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-book-journal-whills text-4xl mb-2"></i>
            <div>Book</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-shirt text-4xl mb-2"></i>
            <div>Fashion</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-baby text-4xl mb-2"></i>
            <div>Mom & baby</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Home & Kitchen</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Health & beauty</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Organic</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Accessories</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Sunglass</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Bag</div>
        </div>

        <div class="p-4 h-40 text-black hover:text-white bg-emerald-100 hover:bg-emerald-800 cursor-pointer rounded-md 
            text-xl sm:text-2xl md:text-3xl text-center flex flex-col items-center justify-center">
            <i class="fa-solid fa-person-breastfeeding text-4xl mb-2"></i>
            <div>Home & lifestyle</div>
        </div>


    </div>
</div>








<div class="container mx-auto p-6">

    <div class="section-heading-wrapper text-center mb-5 px-4">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-semibold text-gray-900 animate__animated animate__fadeInUp mx-auto"
            style="animation-duration: 1s; animation-delay: 0.1s;">
            New <em class="text-teal-500">category</em>
        </h2>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-600 animate__animated animate__fadeInUp mx-auto p-4 
              w-full sm:w-4/5 md:w-3/5 lg:w-1/2 xl:w-1/2 2xl:w-1/2"
            style="animation-duration: 1s; animation-delay: 0.3s;">
            Discover fresh arrivals in our New Category, featuring top-quality picks and trending essentials.
            Shop now for the latest and best!
        </p>
    </div>




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

@endsection