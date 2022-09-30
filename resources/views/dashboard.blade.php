<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            コーヒーみくじ
        </h2>
    </x-slot>

        <form action="{{ route('fortune') }}" method="POST">
            @csrf
            
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center mb-12">
                    <h1 class="mb-4">本日のおすすめのコーヒー</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ボタンを押してください</p>
                    </div>

                    <div class="flex mx-auto px-8">
                        <div class="mx-auto">
                        <div>
                            <input type="submit" class="btn btn-success" name="btn" value="おみくじを引く">
                        </div>
                        </div>

                    </div>
                </div>

        </form>

</x-app-layout>
