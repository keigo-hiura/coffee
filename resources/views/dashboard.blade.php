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
                                {{-- コーヒーみくじをボタンでクリックで起動 --}}
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
            <p>紹介しているコーヒーはこちら！</p>
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

                {{-- フッターの作成 --}}
                <div class="footer-title mb-5">
                        <h2>このサイトとは</h2>
                        <p>サイト作成者や作った理由、お問合せフォームが下記にあります！</p>
                        <hr>
                </div>

                <div class="footer">
                    <div class="footer-detail">
                        {{-- 個人プロフィール --}}
                        <div class="profile">
                            <h2>プロフィール</h2>
                            <img src="{{ asset('images/profile.jpeg') }}" alt="自分の写真">
                            <p><span>名前</span>:日浦敬悟</p>
                            <p><span>経歴</span>:現在、大学4年生で休学中にプログラミングを学び、自分で考えたことを実現できる仕組みに惹かれ、現在IT業界に就職したいと考えています。</p>
                        </div>
                        {{-- サイトを作成した理由->サイトの説明 --}}
                        <div class="site-detail">
                            <h2>サイトの説明</h2>
                            <p><span>作成した理由</span>：家族から違うコーヒーの味をランダムに選んでくれるサービスが欲しいと聞いたことから。</p>
                            <p><span>できること</span>:コーヒーの品種をランダムで選んだり、このサイトから直接amazonやYahoo！で購入できたり、ユーザー同士でオススメの品種を紹介できるサイトです。</p>
                        </div>
                        {{-- お問合せフォームの設置 --}}
                        <div class="contact">
                            <h2>お問合せ</h2>
                            <form action="#" method="post" class="margin-bottom:10px;">
                                <label for="name"><span>名前</span>：</label><br>
                                <input type="text" name="name" id="name" placeholder="名前"><br>
                                <label for="email"><span>メールアドレス</span>：</label><br>
                                <input type="email" name="email" id="email" placeholder="メールアドレス"><br>
                                <label for="title"><span>件名</span>：</label><br>
                                <input type="text" name="title" id="title" placeholder="件名"><br>
                                <label for="content"><span>内容</span>：</label><br>
                                <textarea name="content" id="content" cols="30" rows="10" placeholder="お問い合わせ内容"></textarea><br>
                                <input type="submit" class="btn bg-danger text-white" name="btn" value="送信">
                            </form>
                        </div>
                    </div>
                </div>
                {{-- サイトの著作権 --}}
                <div class="copyright">
                    ©️2022 Keigo
                </div>
    </div>
</x-app-layout>
