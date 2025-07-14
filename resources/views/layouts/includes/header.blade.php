<header class="bg-black pt-10 w-full">
    <div class="flex justify-center">
        <div class="w-[176px] h-[99px]">
            <a href="{{ route('home') }}" class="block relative mb-4 w-full h-full">
                <img
                    src="{{ asset('img/logo.png') }}" alt="Plan Paint Indonesia"
                    data-gif="{{ asset('img/logoPlanPaintIndonesia.gif') }}"
                    class="w-full h-full object-center object-cover"
                    id="logoImage"
                    loading="lazy"
                    decoding="async"
                    width="176"
                    height="99">
            </a>
        </div>
    </div>

    <div class="relative bg-black w-full h-10">
        <nav class="top-0 right-0 left-0 absolute flex justify-center items-center w-full">
            <ul class="flex items-center gap-x-12 bg-[#d5d6d8] mx-auto px-12 py-8 h-14 *:font-normal *:text-black *:text-xl container">
                <li><a href="{{ url('/') }}" class="hover:text-red-600">HOME</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-red-600">ABOUT</a></li>
                <li><a href="{{ url('/products') }}" class="hover:text-red-600">PRODUCTS</a></li>
                <li><a href="{{ url('/projects') }}" class="hover:text-red-600">PROJECTS</a></li>
                <li><a href="{{ url('/news') }}" class="hover:text-red-600">NEWS</a></li>
                <li><a href="{{ url('/reseller') }}" class="hover:text-red-600">RESELLER</a></li>
                <li><a href="{{ url('/testimonials') }}" class="hover:text-red-600">TESTIMONIALS</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-red-600">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
</header>
