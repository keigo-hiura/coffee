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
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/mocha.jpeg') }}">

        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">モカ</h1> {{-- 名前 --}}
            <div class="flex mb-4">

            </div>
            <p class="leading-relaxed">モカには爽やかな酸味があり、最大の特徴とも言えます。</p>

            <p>柑橘系のフルーツのような爽やかな酸味です。</p>

            <p>モカには爽やかな酸味の中にも独特の甘みやコクが感じ、人気の品種です。</p>{{-- 説明文 --}}

            
            <div class="flex">

            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2" href="https://www.amazon.co.jp/s?k=%E3%83%A2%E3%82%AB&crid=3B10I9NDLIJR3&sprefix=%E3%82%82%E3%81%8B%2Caps%2C326&ref=nb_sb_ss_pltr-ranker-opsacceptance_3_2"><i class="fa-brands fa-amazon mr-2">アマゾンで購入</i></a>{{-- アマゾン --}}
            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="https://shopping.yahoo.co.jp/search?p=%E3%83%A2%E3%82%AB&cid=&pf=&pt=&area=13&dlv=&first=1&tab_ex=commerce&sc_i=shp_pc_store_searchBox"><i class="fa-brands fa-yahoo"></i>yahooで購入</i></a>{{-- yahoo --}}
            </div>
        </div>
        </div>
    </div>
    </section>


</x-app-layout>
