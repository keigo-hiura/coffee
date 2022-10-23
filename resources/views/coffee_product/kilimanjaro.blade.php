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
        <img alt="blue_mountain" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/kilimanjaro.jpeg') }}">

        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">キリマンジャロ</h1> {{-- 名前 --}}
            <div class="flex mb-4">

            </div>{{-- 説明文 --}}
            <p class="leading-relaxed">キリマンジャロは強い酸味とさっぱりとした味が特徴です。</p>

            <p>コクもありつつ、苦味が少ないため飲みやすくなっています。</p>
            <p>香りはバニラのような匂いがし、スウィーティーな匂いとなっております。</p>

            <div class="flex">

            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2" href="https://www.amazon.co.jp/s?k=%E3%82%AD%E3%83%AA%E3%83%9E%E3%83%B3%E3%82%B8%E3%83%A3%E3%83%AD&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=14GWNQXASEX40&sprefix=%E3%82%AD%E3%83%AA%E3%83%9E%E3%83%B3%E3%82%B8%E3%83%A3%E3%83%AD%2Caps%2C244&ref=nb_sb_noss_1"><i class="fa-brands fa-amazon mr-2">アマゾンで購入</i></a>{{-- アマゾン --}}
            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="https://shopping.yahoo.co.jp/search?first=1&ss_first=1&ts=1666512087&mcr=87061f6bac7f51d1c2c0e36c831347c2&area=13&astk=&aq=&oq=&p=%E3%82%AD%E3%83%AA%E3%83%9E%E3%83%B3%E3%82%B8%E3%83%A3%E3%83%AD&sc_i=shp_pc_search_searchBox_2&sretry=0"><i class="fa-brands fa-yahoo"></i>yahooで購入</i></a>{{-- yahoo --}}
            </div>
        </div>
        </div>
    </div>
    </section>


</x-app-layout>
