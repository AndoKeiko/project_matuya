@extends('layouts.default')
@section('content')

    <div class="grid grid-cols-1 mb-6 gap-4 md:gap-6 xl:gap-8">
        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 2]) }}" class="group relative flex h-80 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'don_kalbi_hormone_hp_s_240625.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">おすすめ</span>
        </a>
        <!-- image - end -->
    </div>

    <div class="grid grid-cols-2 mb-6 gap-4 md:gap-6 xl:gap-8">
        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 1]) }}" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'gyu_hp_s.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">牛めし</span>
        </a>
        <!-- image - end -->

        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 3]) }}" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'cry_beef_hp_s_230829.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">カレー</span>
        </a>
        <!-- image - end -->

        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 4]) }}" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'don_kimukaru_hp_s_1.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">丼</span>
        </a>
        <!-- image - end -->

        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 5]) }}" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'tei_gyuuyakiniku_hp_s_240416.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"

                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">定食</span>
        </a>
        <!-- image - end -->
    </div>

    <div class="grid grid-cols-3 gap-4 md:gap-6 xl:gap-8">
        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 6]) }}" class="group relative flex h-48 w-100 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">

            @php
            $filename = 'storage/image/' . 'side_namayasai_hp_s_220308.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">サイドメニュー</span>
        </a>
        <!-- image - end -->

        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 8]) }}" class="group relative flex h-48 w-100 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
            @php
            $filename = 'storage/image/' . 'okosama_gyuumeshi_goods_hp_s_1.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">お子様</span>
        </a>
        <!-- image - end -->

        <!-- image - start -->
        <a href="{{ route('menu.index', ['category_id' => 7]) }}" class="group relative flex h-48 w-100 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
            @php
            $filename = 'storage/image/' . 'dri_blend_hp_s_200527.webp';
            @endphp
            <img src="{{ asset($filename) }}" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
            <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ドリンク</span>
        </a>
        <!-- image - end -->
    </div>
@endsection
