<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <span style="color:coral">Coffee Bean Online</span>
        </h2>
    </x-slot>

    <div class="container-fluid">
    <div class="banner">
        <div class="banner-text">
            <h2>コーヒーはいかが？</h2>
            <p>このサイトでは自動でコーヒー選びや購入</p>
            <p>自分のお気に入りのコーヒーを投稿することができます！</p>
        </div>
    </div>

    <div class="fortune-title">
        <h2>コーヒーみくじ</h2>
        <p>本日のコーヒーを選びます！</p>
        <hr>
    </div>
    <div class="card mx-auto mt-5" style="width: 30rem">
        <div class="card-body">

                <div class="px-5 py-8 mx-auto">

                    <p class="h1 font-large text-center card-title">コーヒーみくじ</p>

                    <p class="card-text text-center py-5">今日のコーヒーを自動でチョイスします</p>

                    <div class="flex mx-auto px-8">
                        <div class="mx-auto">
                            <form action="{{ route('fortune') }}" method="POST">
                            @csrf
                                <div>
                                    <input type="submit" class="btn bg-danger text-white" name="btn" value="おみくじを引く">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

        </div>
    </div>
    </div>

</x-app-layout>
