<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            記事投稿
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">おすすめのコーヒーを投稿してみよう！</h1>
            </div>

            {{-- 投稿 --}}
            <form action="{{ route('post.store') }}" method="post">
                @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="name" class="leading-7 text-lg">コーヒー名</label>
                    <input type="text" id="name" name="name"  placeholder="コーヒー名を記入してください！" class="w-full rounded">
                </div>
                </div>

                <div class="p-2 w-full">
                <div class="relative">
                    <label for="content" class="leading-7 text-lg">内容</label>
                    <textarea id="content" name="content" value="content" class="w-full py-16 rounded" placeholder="内容を記入してください！"></textarea>
                </div>
                </div>

                {{--  <input type="file" name="img_path">  --}}

                <div class="p-2 w-full">
                <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">投稿する</button>
                </div>
            </div>
            </div>
            </form>
        </div>
    </section>


</x-app-layout>

