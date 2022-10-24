<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒーみくじ
        </h2>
    </x-slot>

    <div class="card mx-auto mt-5" style="width: 30rem">
        <div class="card-body">

                <div class="px-5 py-8 mx-auto">

                    <p class="h1 font-large text-center card-title">コーヒーみくじ</p>

                    <p class="card-text text-center py-5">今日のコーヒーはこちらがおすすめです！
                    </p>

                    <div class="flex mx-auto px-8">
                        <div class="mx-auto">
                            
                            <p class="text-center">{{ $res }}</p><br>
                            <a class="btn btn-danger" href="{{ route('list') }}">いろんな種類を見てみる</a>
                        </div>


                    </div>
                </div>

        </div>
    </div>


</x-app-layout>



