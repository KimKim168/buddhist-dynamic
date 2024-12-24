@extends('layouts.client')

@section('content')
    <section
        style="
    background-image: url('assets/images/bg/bgContactUs.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-position-x: center;
">
        <!--strat image with contant -->
        <section class="pt-10 lg:mt-10 mt-[35px]">
            <img src="{{ asset('assets/images/gallery/' . $contactUs->image) }}" class="w-full" />
        </section>
        <!--end image with contant -->
        <!-- Strat contactUS -->
        <div class="text-white p-4 md:p-8 space-y-6 max-w-screen-xl mx-auto">
            <!-- Button -->
            <div class="text-center">
                <button
                    class="text-lg md:text-4xl tracking-tight md:p-4 md:px-6 p-2 px-4 text-center font-costum5 text-white uppercase bg-[#11abe31b] rounded-full">
                    Are You Ready <span class="text-[#11ace3]">?</span>
                </button>
            </div>
            <!-- Header Text -->
            <div class="text-center text-sm md:text-2xl text-[#11ace3] font-costum8">
                Just Complete the Form Below, our Team will contact you as soon as possible
            </div>
            <form class="space-y-6" action="{{ url('admin/customer-submit') }}" method="POST">
                @csrf
                <!-- Full Name Field -->
                <div>
                    <div class="space-y-2 font-costum8">
                        <label class="block text-[#11ace3] text-xs md:text-base font-normal" for="full-name">Full
                            Name</label>
                        <input
                            class="w-full p-3 md:p-4 rounded-full border border-[#11ace3] text-xs md:text-base text-black"
                            type="text" id="full-name" name="full_name" placeholder="Full Name" />
                    </div>
                    @error('full_name')
                        <div class="text-red-500 text-xs md:text-base font-costum8 mt-3">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Gender Field -->
                <div>
                    <div class="flex font-costum8 items-center space-x-2 md:space-x-4">
                        <label class="text-[#11ace3] text-xs md:text-base font-semibold" for="gender">Gender</label>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-blue-500" type="radio" name="gender" value="Male"
                                id="male" />
                            <label class="text-xs md:text-base" for="male">Male</label>
                        </div>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-pink-500" type="radio" name="gender" value="Female"
                                id="female" />
                            <label class="text-xs md:text-base" for="female">Female</label>
                        </div>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-pink-500" type="radio" name="gender" value="N/A"
                                id="na" />
                            <label class="text-xs md:text-base" for="na">N/A</label>
                        </div>
                    </div>
                    @error('gender')
                        <div class="text-red-500 text-xs  md:text-base font-costum8 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Phone Number Field -->
                <div>
                    <div class="space-y-2">
                        <label class="block text-[#11ace3] text-xs md:text-base font-normal font-costum8"
                            for="phone-number">Phone
                            Number</label>
                        <input
                            class="w-full p-3 md:p-4 rounded-full border border-[#11ace3] text-xs md:text-base text-black"
                            type="number" id="phone-number" name="phone_number" placeholder="Phone number" />
                    </div>
                    @error('phone_number')
                        <div class="text-red-500 text-xs md:text-base font-costum8 mt-3">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Location Field -->
                <div>
                    <div class="flex items-center space-x-2 md:space-x-4 overflow-hidden">
                        <label class="text-[#11ace3] text-xs md:text-base font-semibold" for="location">Prefer
                            Location</label>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-blue-500" type="radio" name="location" value="Sen Sok"
                                id="sen-sok" />
                            <label class="text-xs md:text-base" for="sen-sok">Sen Sok</label>
                        </div>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-pink-500" type="radio" name="location" value="Chroy Chongvar"
                                id="chroy-chongvar" />
                            <label class="text-xs md:text-base" for="chroy-chongvar">Chroy Chongvar</label>
                        </div>
                        <div class="flex items-center space-x-1 md:space-x-2">
                            <input class="form-radio text-pink-500" type="radio" name="location" value="Not Decided Yet"
                                id="not-decided-yet" />
                            <label class="text-xs md:text-base" for="not-decided-yet">Not Decided Yet</label>
                        </div>
                    </div>
                    @error('location')
                        <div class="text-red-500 text-xs  md:text-base font-costum8 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="text-center mt-5">
                    <button
                        class="text-base sm:text-lg md:text-xl px-4 py-2 sm:px-6 sm:py-3 md:px-10 md:py-4 border-2 border-[#11ace3] text-white rounded-full font-costum8">
                        Send Now
                    </button>
                </div>
            </form>
        </div>
        <!-- End contactUS -->
        <!-- Strat Map -->
        <section class="overflow-hidden ">
            <div class="flex justify-center items-center px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" md:width="24" md:height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-clock">
                    <circle cx="12" cy="12" r="10" />
                    <polyline points="12 6 12 12 16 14" />
                </svg>
                <span class="text-[12px] sm:text-base md:text-[16px] mx-2 font-roboto font-light">
                    {{ $footer->working_hours }}
                </span>
            </div>
            <div
                class="max-w-screen-xl mx-auto px-7 gap-10 mt-10 items-center justify-center grid grid-cols-1 md:grid-cols-2">
                @forelse ($informations as $item)
                    <div class="relative col-span-1 h-[300px] text-white  cursor-pointer" data-aos="fade-right"
                        data-aos-offset="200" data-aos-easing="ease-in-sine">
                        <a class="rounded-md absolute top-0 w-full h-full overflow-hidden" target="_blank"
                            href="{{ $item->link_location_first }}">
                            <img src="{{ asset('assets/images/contacts/' . $item->image_first) }}"
                                class="opacity-30 aspect-video w-full h-full object-cover rounded-xl" />
                        </a>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start">
                            <div class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->location_first }}</span>
                            </div>
                            <div class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    <path d="M14.05 2a9 9 0 0 1 8 7.94" />
                                    <path d="M14.05 6A5 5 0 0 1 18 10" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->phone_number }}</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->email }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- location 2 -->
                    <div class="relative col-span-1 h-[300px] text-white  cursor-pointer" data-aos="fade-right"
                        data-aos-offset="200" data-aos-easing="ease-in-sine">
                        <a class="rounded-md absolute top-0 w-full h-full overflow-hidden" target="_blank"
                            href="{{ $item->link_location_second }}">
                            <img src="{{ asset('assets/images/contacts/' . $item->image_second) }}"
                                class="opacity-30 aspect-video w-full h-full object-cover rounded-xl" />
                        </a>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start">
                            <div class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->location_second }}</span>
                            </div>
                            <div class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    <path d="M14.05 2a9 9 0 0 1 8 7.94" />
                                    <path d="M14.05 6A5 5 0 0 1 18 10" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->phone_number }}</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                </svg>
                                <span class="ml-2 text-sm">{{ $item->email }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                <!-- Location 1 -->
            </div>
        </section>
        <!-- End Map -->
    </section>
@endsection
