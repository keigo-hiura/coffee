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
                <div class="block relative h-36 rounded overflow-hidden">
                <div class=" mx-auto">
                    <a href="{{ route('mocha') }}">
                        <img alt="mocha" class=" object-center w-full " src="{{ asset('images/mocha.jpeg') }}">
                    </a>
                </div>
                </div>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium text-center">モカ</h2>
                </div>
            </div>

            {{-- 商品２ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('kilimanjaro') }}">
                    <img alt="kilimanjaro" class="object-cover object-center w-full h-full block" src="{{ asset('images/kilimanjaro.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">キリマンジャロ</h2>
                </div>
            </div>

            {{-- 商品３ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('mountain') }}">
                    <img alt="blue_mountain" class="object-cover object-center w-full h-full block" src="{{ asset('images/blue_mountain.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">ブルーマウンテン</h2>
                </div>
            </div>

            {{-- 商品４--}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('kona') }}">
                    <img alt="kona" class="object-cover object-center w-full h-full block" src="{{ asset('images/kona.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">コナ</h2>
                </div>
            </div>

            {{-- 商品５ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('guatemala') }}">
                    <img alt="guatemala" class="object-cover object-center w-full h-full block" src="{{ asset('images/guatemala.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">グアテマラ</h2>
                </div>
            </div>

            {{-- 商品６ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('brazil') }}">
                    <img alt="brazil" class="object-cover object-center w-full h-full block" src="{{ asset('images/brazil.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">ブラジル</h2>
                </div>
            </div>

            {{-- 商品７ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">

                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('toraja') }}">
                    <img alt="toraja" class="object-cover object-center w-full h-full block" src="{{ asset('images/toraja.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">トラジャ</h2>
                </div>
            </div>

            {{-- 商品８ --}}
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">

                <div class="block relative h-36 rounded overflow-hidden">
                <div class="mx-auto">
                <a href="{{ route('jawa') }}">
                    <img alt="jawa" class="object-cover object-center w-full h-full block" src="{{ asset('images/jawa.jpeg') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium text-center">ジャワコーヒー</h2>
                </div>
            </div>

            </div>
        </div>
    </section>


</x-app-layout>
