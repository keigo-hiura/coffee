<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒー一覧
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">

                <div class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <a href="{{ route('mocha') }}">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </a>
                </div>
                </div>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>

                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                <p class="mt-1">$21.15</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                <p class="mt-1">$12.00</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                <p class="mt-1">$18.40</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                <p class="mt-1">$16.00</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                <p class="mt-1">$21.15</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                <p class="mt-1">$12.00</p>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                <div class="w-36 mx-auto">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/cafe_coffee_bag.png') }}">
                </div>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                <p class="mt-1">$18.40</p>
                </div>
            </div>

            </div>
        </div>
    </section>


</x-app-layout>
