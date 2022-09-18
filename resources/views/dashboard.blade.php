<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒー豆検索！
        </h2>
    </x-slot>

        <form action="#" method="GET">
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
                                    <select name="bitter" data-toggle="select">
                                        <option value="">全て</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">甘味</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="sweet" data-toggle="select">
                                        <option value="">全て</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">酸味</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="acidity" data-toggle="select">
                                        <option value="">全て</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600 text-center">コク</label>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <select name="rich" data-toggle="select">
                                        <option value="">全て</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mx-auto">
                        <div>
                            <input type="submit" class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2" value="検索">
                        </div>
                        </div>

                    </div>
                </div>
            </section>
        </form>

</x-app-layout>
