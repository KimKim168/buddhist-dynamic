@extends('layouts.client')
@section('content')
    <!--strat image with contant -->
    <section class="mt-6">
        <img src="{{ asset('assets/images/bg/banner_customer_join.jpg') }}" class=" aspect-[16/4] w-full object-cover position-top" />
    </section>
    <!--end image with contant -->
    <!-- Strat contactUS -->
    <section id="focus" class="w-full h-[50%] md:h-[60%] relative bg-cover bg-center"
        style="background-image: url(/img/bg/bg5.jpg)">
        <div class="text-white absolute inset-0 flex flex-col justify-center items-center p-4 md:p-8">
            <!-- Header Text -->
            <div class="bg-black/70 text-white font-costum9 text-center p-6 text-lg md:text-2xl rounded-xl w-full max-w-xl">
                <p>
                    CONGRATULATIONS, YOU ARE ON THE WAY TO TRANSFORM YOUR
                    BODY. OUR TEAM WILL CONTACT YOU SHORTLY!
                </p>
            </div>
            <div class="mt-8 md:mt-12">
                <a href="/"
                    class="bg-[#11ace3] p-3 px-6 text-lg md:text-2xl font-costum8 rounded-full hover:bg-[#11abe3bf]">
                    HOME
                </a>
            </div>
        </div>
    </section>

    <!-- End contactUS -->
@endsection
