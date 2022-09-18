<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            記事編集
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">投稿内容の編集ページ</h1>
            </div>

            {{-- 詳細記事更新 --}}
            <div class="container">
            <form action="{{ route('post.update',$post->id) }}" method="post">
                @csrf
                @method('put')
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="name" class="leading-7 text-lg">コーヒー名</label>
                    <input type="text" id="name" name="name" value="{{ $post->name }}"  placeholder="コーヒー名を記入してください！" class="w-full rounded">
                </div>
                </div>

                <div class="p-2 w-full">
                <div class="relative">
                    <label for="content" class="leading-7 text-lg">内容</label>
                    <textarea id="content" name="content" class="w-full py-16 rounded" placeholder="内容を記入してください！">{{ $post->content }}</textarea>
                </div>
                </div>
                <div class="p-2 w-full">
                <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 mb-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>

                <a href="{{ route('post.index') }}" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">一覧に戻る</a>
                </div>
            </div>
            </div>
            </form>
            </div>
        </div>
    </section>


</x-app-layout>

