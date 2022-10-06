<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FortuneController extends Controller
{
    //
    public function fortune(){
        //みくじ結果
        $lots = [1,2,3,4,5,6,7,8];
        if(isset($_POST['btn'])){
            $lot = array_rand($lots);
            switch ($lot) {
            case 0:
                $res = 'モカ';
                $num = 1;
                break;
            case 1:
                $res = 'キリマンジャロ';
                $num = 2;
                break;
            case 2:
                $res = 'ブルーマウンテン';
                $num = 3;
                break;
            case 3:
                $res = 'コナ';
                $num = 4;
                break;
            case 4:
                $res = 'グアテマラ';
                $num = 5;
                break;
            case 5:
                $res = 'ブラジル';
                $num = 6;
                break;
            case 6:
                $res = 'トラジャ';
                $num = 7;
            case 7:
                $res = 'ジャワコーヒー';
                $num = 8;
            }
            return view('result')->with('res', $res);

            } else {
                return redirect()->route('dashboard');
            }
        }
}

