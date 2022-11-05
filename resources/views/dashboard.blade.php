<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <span style="color:coral">Coffee Bean Online</span>
        </h2>
    </x-slot>

    <div class="container-fluid">
        {{-- バナー画像のテキスト --}}
        <div class="banner">
            <div class="banner-text">
                <h2>コーヒーはいかが？</h2>
                <p>このサイトでは自動でコーヒー選びや購入</p>
                <p>自分のお気に入りのコーヒーを投稿することができます！</p>
            </div>
        </div>

        <div class="fortune-title">
            {{-- コーヒーみくじのタイトル --}}
            <h2>コーヒーみくじ</h2>
            <p>本日のコーヒーを選びます！</p>
            <hr>
        </div>

        <div class="card mx-auto mt-5" style="width: 30rem">
            {{-- コーヒーみくじをカードでデザイン --}}
            <div class="card-body">
                    <div class="px-5 py-8 mx-auto">
                        <p class="h1 font-large text-center card-title">コーヒーみくじ</p>
                        <p class="card-text text-center py-5">今日のコーヒーを自動でチョイスします</p>
                        <div class="flex mx-auto px-4">
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

        {{-- コーヒーリストのタイトル --}}
        <div class="list-title mb-5">
            <h2>コーヒーリスト</h2>
            <p>お取り扱いのコーヒーはこちら！</p>
            <hr>
        </div>

            {{-- 各アイテムの写真と名称 --}}
            <div class="coffee-items">
                <div class="item">
                    <a href="{{ route('mocha') }}"><img src="{{ asset('images/mocha.jpeg') }}" alt="モカ"></a>
                    <p>モカコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('kilimanjaro') }}"><img src="{{ asset('images/kilimanjaro.jpeg') }}" alt="キリマンジャロ"></a>
                    <p>キリマンジャロコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('mountain') }}"><img src="{{ asset('images/blue_mountain.jpeg') }}" alt="ブルーマウンテン"></a>
                    <p>ブルーマウンテンコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('kona') }}"><img src="{{ asset('images/kona.jpeg') }}" alt="コナコーヒー"></a>
                    <p>コナコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('guatemala') }}"><img src="{{ asset('images/guatemala.jpeg') }}" alt="グアテマラコーヒー"></a>
                    <p>グアテマラコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('brazil') }}"><img src="{{ asset('images/brazil.jpeg') }}" alt="ブラジルコーヒー"></a>
                    <p>ブラジルコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('toraja') }}"><img src="{{ asset('images/toraja.jpeg') }}" alt="トラジャコーヒー"></a>
                    <p>トラジャコーヒー</p>
                </div>
                <div class="item">
                    <a href="{{ route('jawa') }}"><img src="{{ asset('images/jawa.jpeg') }}" alt="ジャワコーヒー"></a>
                    <p>ジャワコーヒー</p>
                </div>
            </div>

            


    </div>



</x-app-layout>
