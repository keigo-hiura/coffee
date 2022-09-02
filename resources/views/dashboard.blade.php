<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            おすすめのコーヒー豆を紹介します！
        </h2>
    </x-slot>

        <form action="#" method="post">
            @csrf
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">コーヒー検索</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">好みの特徴を選んでください</p>
                    </div>
                    
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">苦味</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="test">
                                        <option value="test1">弱い</option>
                                        <option value="test2">普通</option>
                                        <option value="test3">強い</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">甘味</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="test">
                                        <option value="test1">弱い</option>
                                        <option value="test2">普通</option>
                                        <option value="test3">強い</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">酸味</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="test">
                                        <option value="test1">弱い</option>
                                        <option value="test2">普通</option>
                                        <option value="test3">強い</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">コク</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="test">
                                        <option value="test1">弱い</option>
                                        <option value="test2">普通</option>
                                        <option value="test3">強い</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mx-auto">
                        <button type="submit" onclick="location.href=" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                        </div>

                    </div>
                </div>
            </section>
        </form>

</x-app-layout>
