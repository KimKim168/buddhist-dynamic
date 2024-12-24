@extends('layouts.client')
@section('content')
    <section
        style="
    background-image: url('assets/images/bg/whyRepeatGym.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-position-x: center;
">

        <!-- End hero -->
        <div class="relative lg:mt-5 mt-[75px]  overflow-hidden  ">
            <div class="flex items-center justify-center bg-cover aspect-[16/3] bg-center duration-700 ease-in-out"
                data-carousel-item
                style="background-image: url('{{ asset('assets/images/gallery/' . ($whyRepeatGymBanner ? $whyRepeatGymBanner->image : '')) }}')">
                <!-- Dark Overlay -->
                <div class="absolute inset-0 bg-[#000000] bg-opacity-60"></div>
                <div class="absolute inset-0 w-full ">
                    <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt=""
                        class="w-full h-full object-center transform scale-x-[1]">
                </div>
                <!-- Content -->
                <div class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-costum3 text-white uppercase">
                        {{ $whyRepeatGymBanner ? $whyRepeatGymBanner->name : '' }}
                    </h1>
                </div>
            </div>
        </div>
        <!--strat image with contant -->
        <section class="w-full mt-10 md:mt-20 overflow-hidden">
            <div
                class="p-4 md:p-10 grid grid-cols-1 md:space-x-10 md:grid-cols-1 lg:grid-cols-2 justify-center items-center px-4 mx-auto max-w-screen-xl lg:px-6">
                <!-- Image Container -->
                <div class="relative border-t-[10px] md:border-t-[15px] border-r-[10px] md:border-r-[15px] border-[#11ace3]/60 w-72 md:w-96 aspect-square mx-auto"
                    data-aos="zoom-out-left" data-aos-duration="1000">
                    <!-- First Image -->
                    <div class="absolute -top-10 md:-top-20 -left-5 md:-left-10">
                        <img class="w-[200px] md:w-[300px] aspect-square object-cover"
                            src="{{ asset('assets/images/gallery/' . $ourMissionFirstImage->image) }}"
                            alt="Trainer assisting woman with leg press" />
                    </div>
                    <!-- Second Image -->
                    <div class="absolute -bottom-5 md:-bottom-5 -right-10 md:-right-20">
                        <img class="w-[200px] md:w-[300px] aspect-square object-cover"
                            src="{{ asset('assets/images/gallery/' . $ourMissionSecondImage->image) }}"
                            alt="Trainer helping man with squat" />
                    </div>
                </div>
                <!-- Text Content -->
                <div class="mt-10 lg:mt-0 text-center grid justify-center" data-aos="zoom-out-right"
                    data-aos-duration="1000">
                    <h2 class="lg:mb-4 text-5xl md:text-8xl font-costum5 text-[#11ace3]">
                        {{ $ourMissionHeading->name }}
                    </h2>
                    <p
                        class="mb-6 font-costum7 text-xl md:text-3xl leading-loose lg:text-left text-white max-w-md md:max-w-lg">
                        {{ $ourMissionHeading->short_description }}
                    </p>
                </div>
            </div>
        </section>
        <!--end image with contant -->
        <!-- Start founded Coaches Client -->
        <section class="text-white max-w-screen-xl mx-auto overflow-hidden">
            <div class="p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-12">
                <!-- Item 1 -->
                <div
                    class="bg-[#11abe331] hover:bg-[#11abe318] hover:cursor-pointer hover:duration-300 flex items-center p-4">
                    <div class="text-2xl md:text-4xl font-costum1 text-center grid p-2 border-r-2 border-[#11ace3]"
                        data-aos="fade-right" data-aos-duration="1000">
                        2020
                        <span class="uppercase text-lg md:text-xl font-costum8">
                            Founded
                        </span>
                    </div>
                    <div class="uppercase font-costum7 text-sm md:text-[16px] max-w-xs lg:text-center ml-4">
                        BUILD FOR EXCEPTIONAL FITNESS EXPERIENCES.
                    </div>
                </div>
                <!-- Item 2 -->
                <div
                    class="bg-[#11abe331] hover:bg-[#11abe318] hover:cursor-pointer hover:duration-300 flex items-center p-4">
                    <div class="text-2xl md:text-4xl font-costum1 text-center grid p-2 border-r-2 border-[#11ace3]"
                        data-aos="fade-up" data-aos-duration="1000">
                        18
                        <span class="uppercase text-lg md:text-xl font-costum8">
                            Coaches
                        </span>
                    </div>
                    <div class="uppercase font-costum7 text-sm md:text-[16px] max-w-xs lg:text-center ml-4">
                        EXPERT TEAM DEDICATED TO YOUR FITNESS SUCCESS
                    </div>
                </div>
                <!-- Item 3 -->
                <div
                    class="bg-[#11abe331] hover:bg-[#11abe318] hover:cursor-pointer hover:duration-300 flex items-center p-4">
                    <div class="text-2xl md:text-4xl font-costum1 text-center grid p-2 border-r-2 border-[#11ace3]"
                        data-aos="fade-left" data-aos-duration="1000">
                        2000+
                        <span class="uppercase text-lg md:text-xl font-costum8">
                            Clients
                        </span>
                    </div>
                    <div class="uppercase font-costum7 text-sm md:text-[16px] max-w-xs lg:text-center ml-4">
                        PROUDLY SERVING SATISFIED MEMBERS
                    </div>
                </div>
            </div>
        </section>
        <!-- End founded Coaches Client -->
        <!-- Strat section -->
        <section class="mt-36 relative bg-cover duration-800  ease-in-out bg-blend-multiply overflow-hidden"
            data-aos="flip-left" data-aos-duration="1000"
            style="
                clip-path: polygon(0 8%, 100% 0, 100% 100%, 0 100%);
                background-image: url('assets/images/bg/young-man-sportswear-exercise-class-gym.jpg');
                background-size: cover;
                 background-position: center;
                background-repeat: no-repeat;
            ">
            <div class="absolute inset-0 bg-[#000000] bg-opacity-[0.98]"></div>
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt="" class=" h-full object-bottom">
            </div>

            <div class="relative max-w-screen-xl mx-auto flex flex-col md:flex-row items-center gap-10 px-4">
                <!-- Image Section -->
                <div class="flex-1">
                    <img src="{{ asset('assets/images/gallery/' . $whyRepeatGymCertifiedCoachLeft->image) }}"
                        alt="Certificate" class="w-full h-auto" />
                </div>
                <!-- Text Section -->
                <div class="flex-1 text-center">
                    <div class="text-5xl md:text-6xl lg:text-8xl font-costum3 uppercase text-white mb-3">
                        Certified
                    </div>
                    <div class="text-5xl md:text-6xl lg:text-8xl font-costum3 uppercase text-[#11ace3] mb-4">
                        Coaches
                    </div>
                </div>
            </div>
        </section>
        <!-- End section -->
        <!-- Strat section -->
        <section class="my-20 mt-32 relative py-5 px-3 md:p-8  bg-blend-multiply "
            style="
                clip-path: polygon(0 3%, 100% 0, 100% 94%, 0 100%);
                background-image: url('assets/images/bg/youngMan2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            ">
            <div class="absolute inset-0 bg-[#000000] bg-opacity-[0.9] "></div>
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ asset('assets/images/bg/backgroundStyle.png') }}" alt="" class="w-full  object-cover">
            </div>

            <div class=" overflow-hidden">
                <div
                    class="uppercase py-2 text-[#11ace3] text-[12px] sm:text-[16px] md:text-xl lg:text-2xl font-costum3 text-center">
                    <p class="sm:p-3 bg-[#11abe323] rounded-full mt-4" data-aos="fade-up"
                        data-aos-anchor-placement="bottom-center" data-aos-duration="1000">
                        We help more than
                        <span class="text-white font-bold text-[17px] sm:text-[25px] md:text-3xl lg:text-4xl">2000</span>
                        clients achieve their fitness goals
                    </p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 my-10 md:mt-36">
                    @forelse ($whyRepeatGymGallery as $index => $item)
                        <div
                            class="relative {{ $index % 2 !== 0 ? 'md:-top-24' : '' }}  border-2 border-transparent hover:border-[#4fd0ff] md:hover:scale-105  md:hover:duration-1000 md:hover:transition duration-1000 transition duration-900 hover:cursor-pointer">
                            <img src="{{ asset('assets/images/gallery/' . $item->image) }}"
                                class="w-full h-full aspect-square object-cover" />
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End section -->
        <!-- Start Join Now -->
        <section class="text-center uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
            <a href="{{ url('contact_us') }}"
                class="sm:px-8 sm:py-3 px-4 py-2 gradient-bg text-white font-bold text-sm sm:text-lg rounded-full transition duration-300">
                Join Us Now!
            </a>
        </section>
        <!-- End Join Now -->
    </section>
@endsection
