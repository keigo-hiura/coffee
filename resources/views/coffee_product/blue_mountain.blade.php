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
        <img alt="blue_mountain" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/blue_mountain.jpeg') }}">

        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">ブルーマウンテン</h1> {{-- 名前 --}}
            <div class="flex mb-4">

            </div>{{-- 説明文 --}}
            <p class="leading-relaxed">ブルーマウンテンは酸味・コク・苦味・甘味などすべたがバランスが良い品種です。</p>

            <p>そのため、「黄金のバランス」と呼ばれるほど、コーヒーとしては完成しているとされています。</p>

            <div class="flex">

            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2" href="https://www.amazon.co.jp/s?k=%E3%83%96%E3%83%AB%E3%83%BC%E3%83%9E%E3%82%A6%E3%83%B3%E3%83%86%E3%83%B3&i=food-beverage&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=HIXN5Y261LV0&sprefix=%E3%83%96%E3%83%AB%E3%83%BC%E3%83%9E%E3%82%A6%E3%83%B3%E3%83%86%E3%83%B3%2Cfood-beverage%2C202&ref=nb_sb_noss_1"><i class="fa-brands fa-amazon mr-2">アマゾンで購入</i></a>{{-- アマゾン --}}
            <a class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="https://shopping.yahoo.co.jp/search/%E3%83%96%E3%83%AB%E3%83%BC%E3%83%9E%E3%82%A6%E3%83%B3%E3%83%86%E3%83%B3%E3%82%B3%E3%83%BC%E3%83%92%E3%83%BC/0/"><i class="fa-brands fa-yahoo"></i>yahooで購入</i></a>{{-- yahoo --}}
            </div>
        </div>
        </div>
    </div>
    </section>


</x-app-layout>
