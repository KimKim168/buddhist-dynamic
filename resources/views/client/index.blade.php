@extends('layouts.client')

@section('meta-data')
    <link rel="apple-touch-icon" href="{{ asset('assets/images/bg/logo.png') }}">
    <link rel="icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <link rel="icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <meta name="description"
        content="Best gym in Phnom Penh offering top-quality fitness training, personal trainers, yoga classes, and the latest gym equipment. Join us to achieve your health and wellness goals in Cambodia.">
    <meta name="keywords"
        content="Cambodian fitness center, Best gym in Phnom Penh, Gym training in Cambodia, Personal training Phnom Penh, Fitness classes Cambodia, Gym memberships Phnom Penh, Top fitness center Cambodia, Gym equipment Phnom Penh, Yoga classes Cambodia, Health and wellness Phnom Penh">

    <title>Best Gym in Phnom Penh | Repeat Gym Cambodia</title>
    <link rel="canonical" href="https://www.repeatgym.com/">
    <meta name="author" content="Repeat Gym">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="REPEAT GYM Cambodia">
    <meta property="og:url" content="https://www.repeatgym.com/">
    <meta property="og:description"
        content="Join the best gym in Phnom Penh for top-quality fitness training, yoga classes, and state-of-the-art gym equipment. Achieve your health and wellness goals in Cambodia with us.">
    <meta property="og:image" content="{{ asset('assets/images/gallery/' . $homeImage->image) }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <section
        style="
    background-image: url('assets/images/bg/Background\ Home\ Page.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-position-x: center;
">

        <!-- Strat transform -->
        <div id="controls-carousel" class="relative w-full lg:mt-8 mt-[75px]"
            style="
            clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 95%);
            ">


            <!-- Carousel wrapper -->
            <div class="relative aspect-[16/6] overflow-hidden">
                <!-- Swiper -->
                <swiper-container class="mySwiper" centered-slides="true" autoplay-delay="3000"
                    autoplay-disable-on-interaction="false">

                    <!-- Slide Items -->
                    @forelse ($homeSlides as $item)
                        <swiper-slide>
                            <div class="relative aspect-[16/6] flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                                data-carousel-item
                                style="background-image: url('{{ asset('assets/images/slides/' . $item->image) }}');">

                                <!-- Dark Overlay -->
                                <div class="absolute inset-0 bg-[#151516] bg-opacity-60 w-full h-full">
                                    <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                                        class="w-full h-auto object-contain">
                                </div>


                                <!-- Reversed Image Background with Aspect Ratio -->

                                <!-- Slide Content -->
                                <div
                                    class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                                    <h1
                                        class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-costum1 text-[#11ace3] uppercase">
                                        Transform
                                    </h1>
                                    <p class="sm:my-1 md:my-2 lg:my-3 xl:my-4 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum5 uppercase"
                                        style="
                                            -webkit-text-fill-color: rgba(255, 255, 255, 0.041);
                                            -webkit-text-stroke-width: 1px;
                                            -webkit-text-stroke-color: rgb(255, 255, 255);
                                        ">
                                        Your Body
                                    </p>
                                    <p
                                        class="lg:mt-2 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum1 text-[#11ace3] uppercase">
                                        With Us
                                    </p>

                                    <!-- Decorative Line Button -->
                                    <div class="flex items-center justify-center py-2 lg:py-5">
                                        <button
                                            class="font-bold px-3 sm:px-4 md:px-5 lg:px-10 xl:px-12 2xl:px-14 lg:border-t-2 border-t"></button>
                                    </div>

                                    <!-- Call to Action -->
                                    <a href="{{ url('/contact_us') }}"
                                        class="px-1 sm:px-2 py-1 gradient-bg uppercase text-white font-costum3 text-[5px] sm:text-[8px] md:text-[11px] lg:text-[12px] xl:text-[14px] 2xl:text-[17px] rounded-full transition duration-300">
                                        Join Us Now!
                                    </a>
                                </div>
                            </div>
                        </swiper-slide>

                    @empty
                        <p class="text-red-500 text-center max-w-screen-xl mx-auto text-xs md:text-base font-costum8">
                            No slides available
                        </p>
                    @endforelse

                </swiper-container>

                <!-- Swiper JS -->
                <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
            </div>

        </div>
        <!-- End transform -->

        <!-- strat middle -->
        <div class="mt-10">
            <div class="flex mx-5 flex-col justify-center items-center text-2xl md:text-3xl lg:text-4xl font-bold"
                data-aos="fade-up" data-aos-duration="2000">
                <h1 class="uppercase text-[#11ace3] font-costum3 text-center">
                    REPEAT GYM HAS THE MOST
                    <span class="p-2 bg-[#11abe326] text-[#ffffff] rounded-xl">COACHES</span>
                    IN CAMBODIA,
                </h1>
                <p class="uppercase text-lg md:text-2xl lg:text-3xl font-costum3 mt-3 text-center">
                    OFFERING YOU THE BEST SUPPORT AND GUIDANCE
                </p>
            </div>
            <div class="flex items-center justify-center py-6 md:py-8 lg:py-10">
                <button class="font-bold px-10 md:px-14 py-2 md:py-3 border-t-2 border-[#11ace3]"></button>
            </div>
            <div class="max-w-screen-xl mx-auto relative overflow-hidden">
                @if (empty($homeImage->image))
                    <p class="text-red-500 text-center text-xs md:text-base font-costum8">Please insert coach image</p>
                @else
                    <div class="p-4 bg-[#2b2b2e] rounded-2xl">
                        <img class="rounded-2xl aspect-[16/6] object-cover w-full"
                            src="{{ asset('assets/images/gallery/' . $homeImage->image) }}" />
                    </div>
                @endif
            </div>
        </div>

        <!-- End middle -->

        <!-- Strat Section -->
        <section class="py-8 antialiased md:py-12 overflow-hidden">
            <div class="py-8 px-8 mx-auto max-w-screen-xl sm:py-12 lg:px-6">
                <div class="space-y-8 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($homeTopPages as $item)
                        <div
                            class="bg-black p-4 border border-transparent hover:border-[#11ace3] transform hover:scale-105 mx-auto duration-700 transition-all w-full">
                            <img class="aspect-square object-cover" src="{{ asset('assets/images/pages/' . $item->image) }}"
                                alt="Image description" />
                            <div class="text-center">
                                <a href="#">
                                    <h5 class="my-4 text-xl md:text-2xl font-bold tracking-tight text-[#11ace3] uppercase">
                                        {{ $item->name }}
                                    </h5>
                                </a>
                                <p class="mb-8 uppercase text-sm md:text-xl dark:text-gray-400 font-costum7">
                                    {{ $item->short_description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                            No available</p>
                    @endforelse


                </div>
            </div>
        </section>

        <!--End Section  -->

        <!-- Strat section -->
        <section class="mt-20 w-full  flex py-20 px-7 md:p-20 relative"
            style="
                    background-image: url('assets/images/bg/bg1.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                ">
            <div class="absolute inset-0 bg-[#000000] bg-opacity-95"></div>
            <div class="absolute inset-0 w-full h-full ">
                <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                    class="w-full  object-contain transform scale-x-[-1]  ">
            </div>


            <div
                class="relative max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-16 md:gap-12 lg:gap-8 z-10">
                @forelse ($homeBottomPages as $item)
                    <div
                        class="p-3 rounded-xl bg-[#393946] hover:scale-105 transition duration-300 hover:border-[#11ace3] border border-transparent opacity-60 hover:opacity-100">
                        <img src="{{ asset('assets/images/pages/' . $item->image) }}"
                            class="w-full h-[500px] object-cover rounded-xl" />
                        <p class="uppercase text-[#11ace3] text-2xl font-medium mt-2 text-center">
                            {{ $item->name }}
                        </p>
                    </div>
                @empty
                    <p class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                        No available</p>
                @endforelse


            </div>

        </section>
    </section>
@endsection
