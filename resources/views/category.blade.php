@extends('layouts.default')
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 mb-6 gap-4 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/tei_gorochiki_wahuu_tarutaru_hp_240528.jpg"
                    loading="lazy" alt="Photo by Magicle"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">おすすめ</span>
            </a>
            <!-- image - end -->
        </div>

        <div class="grid grid-cols-2 mb-6 gap-4 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/gyu_hp_s_1.jpg"
                    loading="lazy" alt="Photo by Magicle"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">牛めし</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/cry_beef_hp_s_2.jpg"
                    loading="lazy" alt="Photo by Magicle"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">カレー</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/don_kimukaru_hp_s_1.jpg"
                    loading="lazy" alt="Photo by Martin Sanchez"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">丼</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/tei_gyuuyakiniku_hp_s_5.jpg"
                    loading="lazy" alt="Photo by Magicle"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">定食</span>
            </a>
            <!-- image - end -->
        </div>

        <div class="grid grid-cols-3 gap-4 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#" class="group relative flex h-48 w-60 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/side_namayasai_hp_s_2.jpg"
                    loading="lazy" alt="Photo by Lorenzo Herrera"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">サイドメニュー</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 w-60 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/okosama_gyuumeshi_goods_hp_s_1.jpg"
                    loading="lazy" alt="Photo by Lorenzo Herrera"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">お子様</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 w-60 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://www.matsuyafoods.co.jp/menu/upload_images/dri_blend_hp_s_200527.jpg"
                    loading="lazy" alt="Photo by Lorenzo Herrera"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ドリンク</span>
            </a>
            <!-- image - end -->
        </div>
    </div>
</div>

@endsection