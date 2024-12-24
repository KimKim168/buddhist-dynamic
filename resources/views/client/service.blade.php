@extends('layouts.client')
@section('content')
    <section
        style="
background-image: url('assets/images/bg/service.jpg');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-position-x: center;
">
        <!-- Strat slider -->
        <div id="controls-carousel" class="relative w-full mt-[75px] lg:mt-8 overflow-hidden"
            style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 95%)">
            <!-- Carousel wrapper -->
            <div class="relative aspect-[16/6] overflow-hidden ">
                <!-- Swiper -->
                <swiper-container class="mySwiper" centered-slides="true" autoplay-delay="3000"
                    autoplay-disable-on-interaction="false">
                    <!-- slide 1 -->
                    @forelse ($ourServiceSlides as $item)
                        <swiper-slide>
                            <div class="flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                                data-carousel-item
                                style="
                                background-image: url('{{ asset('assets/images/slides/' . $item->image) }}');
                            ">
                                <!-- Dark Overlay -->
                                {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}
                                <div class="absolute inset-0 bg-[#151516] bg-opacity-60 w-full h-full ">
                                    <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                                        class="w-full h-auto object-contain ">
                                </div>
                                <!-- Content -->
                                <div
                                    class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                                    <h1
                                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#11ace3] uppercase">
                                        FIT <span class="text-white">& FUN</span>
                                    </h1>
                                </div>

                            </div>
                        </swiper-slide>
                    @empty
                        <p class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                            No available</p>
                    @endforelse

                </swiper-container>
                <!-- Swiper JS -->
                <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
            </div>
        </div>
        <!-- End slider -->


        <!--Strat​​ Image with CTA button  -->
        <section>
            <div class="overflow-hidden">
                <div class="md:mt-28 mt-14">
                    <div class="flex flex-col justify-center items-center text-4xl font-bold md:mt-16" data-aos="fade-up"
                        data-aos-duration="1000">
                        <p
                            class="uppercase rounded-3xl text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl px-3 sm:px-5 md:px-7 lg:px-9 p-2 sm:p-3 md:p-4 lg:p-5 bg-[#11abe323]">
                            Training Options
                        </p>

                    </div>
                    <div class="flex items-center justify-center py-5 md:py-10">
                        <button class="font-bold px-14 border-t-2 border-white"></button>
                    </div>
                </div>
                <!-- group tranning -->
                <div class=" lg:mt-5 mt-[75px]  overflow-hidden  ">
                    <div class="bg-[#000000] bg-opacity-[0.98] relative mb-20 bg-no-repeat   bg-blend-multiply overflow-hidden"
                        style="
                        background-image: url('assets/images/bg/young-man-sportswear-exercise-class-gym.jpg');
                        background-size: cover;
                    ">
                        {{-- <div class="absolute inset-0 w-full h-full">
                            <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                                class=" w-full transform scale-x-[-1]">
                        </div> --}}
                        <!-- Item 1 -->
                        <div
                            class="gap-8 py-8 items-center px-3 md:px-3 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 ">
                            <div class="transition duration-300 hover:cursor-pointer" data-aos="fade-up"
                                data-aos-duration="600">
                                <!-- Swiper -->
                                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true"
                                    space-between="30" centered-slides="true" autoplay-delay="3000"
                                    autoplay-disable-on-interaction="false">

                                    @forelse ($trainingOptionSlideImageTop as $item)
                                        <swiper-slide>
                                            <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                                data-carousel-item
                                                style="
                                            background-image: url('{{ asset('assets/images/gallery/' . $item->image) }}');
                                        ">
                                            </div>
                                        </swiper-slide>
                                    @empty
                                        <p
                                            class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                                            No available</p>
                                    @endforelse

                                </swiper-container>
                                <!-- Swiper JS -->
                                <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                            </div>
                            <div class="md:mt-0 mt-4 flex flex-col p-2">

                                <div class="text-center">
                                    @if ($groupTranning)
                                        <h2
                                            class="mb-2 md:mb-7 text-3xl md:text-5xl tracking-tight text-center font-costum5 text-[#11ace3] uppercase">
                                            {{ $groupTranning->name }}
                                        </h2>
                                        <p class="md:mb-6 mb-2 font-costum4 text-white md:text-xl">
                                            {{ $groupTranning->short_description }}
                                        </p>
                                    @endif

                                </div>


                                <div class="space-y-20">
                                    @forelse ($groupTranningItem as $item)
                                        <div class="flex justify-center items-end">
                                            <div class="flex flex-col bg-[#0c0c0c] p-8" data-aos="fade-right"
                                                data-aos-duration="1000">
                                                <h4 class="font-extrabold text-[#11ace3] text-xl">
                                                    {{ $item->name }}
                                                </h4>
                                                <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                                    {{ $item->short_description }}
                                                </p>
                                            </div>
                                        </div>
                                    @empty
                                        <p
                                            class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                                            No available</p>
                                    @endforelse


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Persion tranning -->
                <div class=" lg:mt-5 mt-[75px]  overflow-hidden  ">
                    <div class="bg-[#000000] bg-opacity-[0.98] relative mb-20 bg-no-repeat   bg-blend-multiply overflow-hidden"
                        style="
                        background-image: url('assets/images/bg/young-man-sportswear-exercise-class-gym.jpg');
                        background-size: cover;
                    ">
                        {{-- <div class="absolute inset-0 w-full h-full">
                            <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                                class=" w-full transform scale-y-[-1]">
                        </div> --}}
                        <!-- Item 2 -->
                        <div
                            class="gap-8 py-8 items-center px-3 md:px-3 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 overflow-hidden">
                            <div class="md:mt-0 flex flex-col p-2" data-aos="fade-right" data-aos-duration="600">
                                <div class="text-center">
                                    <h2
                                        class="mb-2 md:mb-7 text-3xl md:text-5xl tracking-tight text-center font-costum5 text-[#11ace3] uppercase">
                                        {{ $persionalTranning->name }}
                                    </h2>
                                    <p class="md:mb-6 mb-2 font-costum4 text-white md:text-xl">
                                        {{ $persionalTranning->short_description }}
                                    </p>


                                </div>
                                <div class="space-y-20">
                                    @forelse ($persionalTranningItem as $item)
                                        <div class="flex justify-center items-end">
                                            <div class="flex flex-col bg-[#080808] p-8" data-aos="fade-left"
                                                data-aos-duration="1000">
                                                <h4 class="font-extrabold text-[#11ace3] text-xl">
                                                    {{ $item->name }}
                                                </h4>
                                                <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                                    {{ $item->short_description }}
                                                </p>
                                            </div>
                                        </div>
                                    @empty
                                        <p
                                            class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                                            No available</p>
                                    @endforelse


                                </div>
                            </div>
                            <div class="hover:cursor-pointer overflow-hidden" data-aos="fade-left" data-aos-duration="600">
                                <div class="transition duration-300 hover:cursor-pointer">
                                    <!-- Swiper -->
                                    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true"
                                        space-between="30" centered-slides="true" autoplay-delay="3000"
                                        autoplay-disable-on-interaction="false">
                                        <!-- slide 1 -->
                                        @forelse ($trainingOptionSlideImageBottom as $item)
                                            <swiper-slide>
                                                <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                                    data-carousel-item
                                                    style="
                                            background-image: url('{{ asset('assets/images/gallery/' . $item->image) }}');
                                        ">
                                                </div>
                                            </swiper-slide>
                                        @empty
                                            <p
                                                class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                                                No available</p>
                                        @endforelse

                                    </swiper-container>
                                    <!-- Swiper JS -->
                                    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--End Image with CTA button  -->

        <!-- strat  -->
        <section>
            <!-- Button Section -->
            <div class="text-lg sm:text-xl md:text-2xl lg:text-2xl  relative -bottom-6 sm:-bottom-9  md:-bottom-24 lg:-bottom-28 z-10 text-white text-center overflow-hidden"
                data-aos="fade-up" data-aos-duration="600">
                <button
                    class="uppercase px-4 sm:px-6 md:px-8 lg:px-10 p-3 sm:p-4 md:p-5 lg:p-3 rounded-full bg-[#11abe355] md:bg-[#11abe323] font-medium">
                    Additional Facilities and Services
                </button>
            </div>


            <!-- Main Section -->
            <div class="relative lg:mt-20 p-4 pb-10 w-full h-full  bg-black bg-opacity-95 bg-no-repeat bg-center bg-contain bg-blend-multiply"
                style="
                    background-image: url('assets/images/bg/bgMen1.jpg');
                    background-size: cover;
                ">
                <div class="absolute inset-0 w-full h-full">
                    <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                        class=" w-full h-auto object-contain transform scale-y-[1] scale-x-[-1]">
                </div>
                <div class="max-w-screen-xl mx-auto py-10">
                    <!-- Responsive Grid -->
                    <div
                        class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-8 md:mt-20 lg:mt-36">
                        <!-- Item 1 -->
                        @forelse ($ourServiceGalleryImage as $index => $item)
                            <div class="group relative">
                                <div
                                    class="relative {{ $index % 2 !== 0 ? 'lg:-top-24' : '' }} border-2 border-transparent hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                                    <img src="{{ asset('assets/images/gallery/' . $item->image) }}" alt="Avatar"
                                        class="block aspect-square object-cover w-full h-full" />
                                    <div
                                        class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                        <div
                                            class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            {{ $item->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-red-500 text-center max-w-screen-xl mx-auto  text-xs md:text-base font-costum8">
                                No available</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </section>

        <!--End  -->

    </section>
@endsection
