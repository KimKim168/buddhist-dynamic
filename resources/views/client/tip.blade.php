@extends('layouts.client')
@section('content')
    <section class="py-8 p-4 pt-0 mt-20 antialiased overflow-hidden bg-primary">
        <!-- Blog Cards -->

        <div class="max-w-7xl mx-auto ">

            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                @forelse ($tips as $item)
                    <a href="{{ url('tips/' . $item->id) }}">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden ">
                            <img class="w-full h-48 object-cover" src="{{ asset('assets/images/news/' . $item->image) }}"
                                alt="Blog Image">
                            <div class="p-6">
                                <h3
                                    class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer line-clamp-1">
                                    {{ $item->name }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ $item->short_description }}
                                </p>
                            </div>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
