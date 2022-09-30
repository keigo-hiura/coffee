<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FortuneController extends Controller
{
    //
    public function fortune(){
        //みくじ結果
        $lots = [1,2,3,4,5,6,7];
        if(isset($_POST['btn'])){
            $lot = array_rand($lots);
            switch ($lot) {
            case 0:
                $res = '大吉';
                $num = 1;
                break;
            case 1:
                $res = '中吉';
                $num = 2;
                break;
            case 2:
                $res = '小吉';
                $num = 3;
                break;
            case 3:
                $res = '吉';
                $num = 4;
                break;
            case 4:
                $res = '半吉';
                $num = 5;
                break;
            case 5:
                $res = '末吉';
                $num = 6;
                break;
            case 6:
                $res = '凶';
                $num = 7;
            }
            return view('result')->with('res', $res);

            } else {
                return redirect()->route('dashboard');
            }
        }
}

