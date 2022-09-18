<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            記事一覧
        </h2>
    </x-slot>

    <div class="my-5">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">

                <a href="{{ route('post.create') }}" class="btn flex mx-auto  mb-24 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg ">記事を投稿する</a>

                <div class="card">
                    <div class="card-body">
                    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10  sm:flex-row flex-col">

                        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                            @foreach ($posts as $post)

                            <div class="row text-center">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="mt-1 text-gray-500 text-sm">{{ $post->created_at }}</span>
                            </div>

                            {{-- 見出し --}}
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-4">タイトル：{{ $post->name }}</h2>

                            {{-- 内容 --}}
                            <p class="leading-relaxed text-base mb-10">投稿内容：{{ $post->content }}</p>

                            {{-- 各idで詳細表示や編集、削除が出来る--}}
                            <form action="{{ route('post.destroy',$post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.show',$post->id) }}">詳細表示</a>
                            <a href="{{ route('post.edit',$post->id) }}">編集</a>
                            <button type="submit">削除する</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            </section>
    </div>




</x-app-layout>

