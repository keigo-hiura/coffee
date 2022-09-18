<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒー一覧
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
            {{-- 商品１ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('mocha') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">モカ</h2>
                </div>
            </div>

            {{-- 商品２ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('kilimanjaro') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">キリマンジャロ</h2>
                </div>
            </div>

            {{-- 商品３ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('mountain') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">ブルーマウンテン</h2>
                </div>
            </div>

            {{-- 商品４--}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('kona') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">コナ</h2>
                </div>
            </div>

            {{-- 商品５ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('guatemala') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">グアテマラ</h2>
                </div>
            </div>

            {{-- 商品６ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('brazil') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">ブラジル</h2>
                </div>
            </div>

            {{-- 商品７ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">

                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('toraja') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">トラジャ</h2>
                </div>
            </div>

            {{-- 商品８ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">

                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('jawa') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">ジャワコーヒー</h2>
                </div>
            </div>

            </div>
        </div>
    </section>


</x-app-layout>
