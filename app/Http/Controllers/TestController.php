<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

// クエリビルダ(phpでクエリが書ける)
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(){

      $tests = DB::table('tests')
      // idだけを取得する
      ->select('id')
      ->get();

      $values = Test::all();

      // コレクション型(DBからデータを取得する際の型名)
      //$collection = collect([1, 2, 3, 4, 5, 6, 7]);
      //collectionを4つ毎に区切る
      //$chunks = $collection->chunk(4);
      //$chunks->toArray();
      
      // 処理を止めて変数を表示(die+var_daump)
      //dd($chunks);
      //dd($values);
      dd($tests);

      return view('tests.test', compact('values'));
    }
}
