<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            記事一覧
        </h2>
    </x-slot>


    <div class="my-5">
        <section class="body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="row">
                <a href="{{ route('post.create') }}" class="btn btn-primary col-2 mx-auto">記事を投稿する</a>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class=" mx-auto border-b pb-10 mb-10">

                        <div class="mt-6">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <div class="row">
                                            <th scope="col-3">投稿日時</th>
                                            <th scope="col-3">タイトル</th>
                                            <th scope="col-3">投稿内容</th>
                                            <th scope="col-3"></th>
                                        </div>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        {{-- 投稿日時 --}}
                                        <th><span class="mt-1 text-gray-500 text-sm">{{ $post->created_at }}</span></th>

                                        {{-- 見出し --}}
                                        <td><h2 class="text-gray-900 text-lg title-font font-medium mb-2">{{ $post->name }}</h2></td>

                                        {{-- 内容 --}}
                                        <td><p class="leading-relaxed text-base mb-4">{{ $post->content }}</p></td>

                                        {{-- 各idで詳細表示や編集、削除が出来る--}}
                                        <form action="{{ route('post.destroy',$post->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                            <td>
                                                <a href="{{ route('post.show',$post->id)}}" class="btn btn-info"><i class="fa-solid fa-book-open"></i>詳細表示</a>
                                                <a href="{{ route('post.edit',$post->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>編集</a>
                                                <button type="submit button" class="btn btn-danger"><i class="fa-solid fa-trash"></i>削除</button>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </section>
    </div>




</x-app-layout>

