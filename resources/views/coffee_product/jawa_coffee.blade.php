<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒー詳細
        </h2>
    </x-slot>


    <section class="text-gray-600 body-font overflow-hidden">

    <a href="{{ route('list') }}"><i class="fa-solid fa-left-long"></i>戻る</i></a>
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="jawa" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/jawa.jpeg') }}">

        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">ジャワ</h1> {{-- 名前 --}}
            <div class="flex mb-4">

            </div>{{-- 説明文 --}}
            <p class="leading-relaxed">ジャワコーヒーは酸味が少なく、やや強い苦味とコクが特徴的です。</p>

            <p>そのため、苦味が苦手な人にはお勧めできない品種です。</p>
            <p>苦味が強いということはカフェイン含有量が多いので、勉強や作業など集中力を上げたい人にはお勧めできる品種となっています。</p>

            <div class="flex">

            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2" href="https://www.amazon.co.jp/s?k=%E3%82%B8%E3%83%A3%E3%83%AF%E3%82%B3%E3%83%BC%E3%83%92%E3%83%BC&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1DYS8IU9LWGAI&sprefix=%E3%82%B8%E3%83%A3%E3%83%AF%E3%82%B3%E3%83%BC%E3%83%92%E3%83%BC%2Caps%2C181&ref=nb_sb_noss"><i class="fa-brands fa-amazon mr-2">アマゾンで購入</i></a>{{-- アマゾン --}}
            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="https://shopping.yahoo.co.jp/search?first=1&ss_first=1&ts=1666514939&mcr=65428247385d34cb443b7f69558f91b1&sretry=0&area=13&astk=&aq=&oq=&p=%E3%82%B8%E3%83%A3%E3%83%AF%E3%82%B3%E3%83%BC%E3%83%92%E3%83%BC&sc_i=shp_pc_search_searchBox_2"><i class="fa-brands fa-yahoo"></i>yahooで購入</i></a>{{-- yahoo --}}
            </div>
        </div>
        </div>
    </div>
    </section>


</x-app-layout>
