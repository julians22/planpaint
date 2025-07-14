@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div>
        {{-- video auto play --}}
        <video autoplay muted loop class="w-full object-cover">
            <source src="{{ asset('video/VideoBackgroundPlanPaintIndonesia r.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>

    <div class="relative bg-black w-full">
        <div>
            <div class="spacer-lg"></div>
            <div class="spacer-lg"></div>

            <div class="mx-auto text-center container">
                <img src="{{ asset('img/product-lineup.png') }}" alt="" class="mx-auto mb-4 w-[1280px]">

                <h1 class="mb-10 font-bold text-[#FFD284] text-4xl">More than just paint – We support your creativity and quality.</h1>

                <p class="text-white text-2xl">Plan Paint Indonesia is a provider of high-quality automotive painting products based in Indonesia,<br>
                    directly importing from Thailand. We offer a wide range of painting solutions for the automotive in- <br>
                    dustry, including fast-drying clear coats, primers, thinners, and stainless steel paint. </p>

                    <div class="space-lg"></div>
                    <p>
                    By prioritizing quality, efficiency, and innovation, we strive to be a trusted partner for workshops, <br>
                    painters, and builders across Indonesia.</p>


                <div class="spacer-lg"></div>

                <div class="justify-items-center align-items-center gap-x-10 grid grid-cols-4">

                    <div class="w-[300px]">
                        <div class="group bg-red-600 p-10 rounded-full w-full aspect-square transition-transform translate-y-0 hover:-translate-y-2 hover:translate-x-2 duration-300">
                            <img src="{{ asset('img/home_guard.png') }}" alt="" class="w-full h-full object-center object-cover group-hover:scale-125 transition-transform duration-500 ease-in-out delay-100">
                        </div>
                        <p class="mt-5 text-white text-2xl text-center">Thailand Premium <br> Product Quality</p>
                    </div>
                    <div class="w-[300px]">
                        <div class="group bg-red-600 p-10 rounded-full w-full aspect-square transition-transform translate-y-0 hover:-translate-y-2 hover:translate-x-2 duration-300">
                            <img src="{{ asset('img/home_guard.png') }}" alt="" class="w-full h-full object-center object-cover group-hover:scale-125 transition-transform duration-500 ease-in-out delay-100">
                        </div>
                        <p class="mt-5 text-white text-2xl text-center">Strong Durability <br> & Easy Application</p>
                    </div>
                    <div class="w-[300px]">
                        <div class="group bg-red-600 p-10 rounded-full w-full aspect-square transition-transform translate-y-0 hover:-translate-y-2 hover:translate-x-2 duration-300">
                            <img src="{{ asset('img/home_car.png') }}" alt="" class="w-full h-full object-center object-cover group-hover:scale-125 transition-transform duration-500 ease-in-out delay-100">
                        </div>
                        <p class="mt-5 text-white text-2xl text-center">Suitable for <br> Any Vehicles</p>
                    </div>
                    <div class="w-[300px]">
                        <div class="group bg-red-600 p-10 rounded-full w-full aspect-square transition-transform translate-y-0 hover:-translate-y-2 hover:translate-x-2 duration-300">
                            <img src="{{ asset('img/home_tag.png') }}" alt="" class="w-full h-full object-center object-cover group-hover:scale-125 transition-transform duration-500 ease-in-out delay-100">
                        </div>
                        <p class="mt-5 text-white text-2xl text-center">Competitive <br> Price </p>
                    </div>

                </div>


                <div class="spacer-lg"></div>
                <div class="spacer-lg"></div>

            </div>

            <div class="relative bg-black w-full">
                <div class="spacer-lg"></div>
                <div class="spacer-lg"></div>

                <div class="swiper home-swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="home--story-item-wrapper">
                                <div class="item-video">
                                    <img src="{{ asset('img/thumbnail_video.png') }}" alt="Thumbnail Video"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="item-description-wrapper">
                                    <p class="font-bold text-white text-3xl text-center">
                                        “I’ve been in the automotive painting business for over 10 years, and
                                        Plan Paint Indonesia has truly raised the bar. Their fast-drying clear
                                        coat saves us time without compromising on shine or durability. The
                                        stainless steel paint also gives a smooth, flawless finish that our
                                        clients love. Reliable quality, easy application, and consistent
                                        results—definitely my go-to paint brand.”
                                    </p>

                                    <p class="font-bold text-[#fed283] text-3xl text-center"><strong>— Andi S., Auto Workshop Owner,
                                            Surabaya</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="home--story-item-wrapper">
                                <div class="item-video">
                                    <img src="{{ asset('img/thumbnail_video.png') }}" alt="Thumbnail Video"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="item-description-wrapper">
                                    <p class="font-bold text-white text-3xl text-center">
                                        “I’ve been in the automotive painting business for over 10 years, and
                                        Plan Paint Indonesia has truly raised the bar. Their fast-drying clear
                                        coat saves us time without compromising on shine or durability. The
                                        stainless steel paint also gives a smooth, flawless finish that our
                                        clients love. Reliable quality, easy application, and consistent
                                        results—definitely my go-to paint brand.”
                                    </p>

                                    <p class="font-semibold text-[#fed283] text-3xl text-center"><strong>— Andi S., Auto Workshop Owner,
                                            Surabaya</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="home--story-item-wrapper">
                                <div class="item-video">
                                    <img src="{{ asset('img/thumbnail_video.png') }}" alt="Thumbnail Video"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="item-description-wrapper">
                                    <p class="font-bold text-white text-3xl text-center">
                                        “I’ve been in the automotive painting business for over 10 years, and
                                        Plan Paint Indonesia has truly raised the bar. Their fast-drying clear
                                        coat saves us time without compromising on shine or durability. The
                                        stainless steel paint also gives a smooth, flawless finish that our
                                        clients love. Reliable quality, easy application, and consistent
                                        results—definitely my go-to paint brand.”
                                    </p>

                                    <p class="font-bold text-[#fed283] text-3xl text-center"><strong>— Andi S., Auto Workshop Owner,
                                            Surabaya</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
                <div class="spacer-lg"></div>
                <div class="spacer-lg"></div>

                <div class="right-0 bottom-0 left-0 absolute bg-red-600 h-[58%]">
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="bg-red-600 w-full">
        <div class="spacer-lg"></div>

        <div class="mx-auto container">


            <div class="gap-x-4 grid grid-cols-1 lg:grid-cols-3">

                @for ($i = 0; $i < 3; $i++)

                    <!-- News Item -->
                    <div class="bg-white rounded-xl overflow-hidden">
                        @php
                            $imagePath = "img/news/news-".($i+1).".png";
                        @endphp
                        <img src="{{ asset($imagePath) }}"
                            alt="News {{ $i+1 }}" class="w-full object-cover aspect-[111/91]">

                        <div class="px-6 pt-2 pb-4">
                            <!-- Title and Author/Date Wrapper -->
                            <div class="flex flex-col items-start">
                                <h2 class="text-gray-900 text-2xl">News Title Here</h2>
                                <div class="mt-2 md:mt-0 text-gray-600 text-sm">
                                    posted by <span class="font-semibold">Author Name</span> &middot; <span>Date Here</span>
                                </div>
                            </div>
                            <!-- Spacing between title/author and description -->
                            <div class="my-4"></div>
                            <!-- Description -->
                            <p class="text-gray-700">
                                News description goes here. This is a short summary or excerpt of the news post.
                            </p>
                        </div>
                    </div>

                @endfor


            </div>


        </div>

        <div class="spacer-lg"></div>
        <div class="spacer-lg"></div>

    </div>

    <!-- Counter Section -->
    <div class="flex flex-col justify-center w-full min-h-[580px]" style="background-image: url('{{ asset('img/car_1.png') }}'); background-size: cover; background-position: center;">

        <div class="mx-auto container">

            <h5 class="font-semibold text-white text-3xl text-center">We are growing the way in inspire automotive industry and enthusiast</h5>

            <div class="justify-items-center align-items-center gap-x-10 grid grid-cols-3 mt-10">

                <div class="flex flex-col items-center gap-y-3">
                    <span class="font-semibold text-[#ffd283] text-5xl">3,125</span>
                    <div class="font-normal text-white text-3xl text-center">
                        AUTOMOTIVE PAINTS <br> APPLIED
                    </div>
                </div>
                <div class="flex flex-col items-center gap-y-3">
                    <span class="font-semibold text-[#ffd283] text-5xl">741</span>
                    <div class="font-normal text-white text-3xl text-center">
                        PROJECTS <br> COMPLETED
                    </div>
                </div>
                <div class="flex flex-col items-center gap-y-3">
                    <span class="font-semibold text-[#ffd283] text-5xl">156</span>
                    <div class="font-normal text-white text-3xl text-center">
                        SATISIFIED <br> CUSTOMERS
                    </div>
                </div>

            </div>


        </div>



    </div>


@endsection
