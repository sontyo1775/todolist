<?php

namespace App\Http\Controllers;
use App\Models\Favoitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Seasoning;







class UserContainer extends Controller
{
    // 欲しいものリストページ
    public function favo() {
        return view('detial.favo');
    }
    public function favoadd() {
        $favo = Favoitem::all();
        
        return view('detial.favo', ['favo'=> $favo]);
    }
    public function add() {
        return view('detial.create');
    }
    // 作成
    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'text' => $request->text,
            'date' => $request->date,
            'modified' => $request->modified
        ];
        DB::table('favoitems')->insert($param);

        return redirect()->to('todo/favo');
    }
    public function upp(Request $request) {
        $items = DB::table('favoitems')
        ->where('id', $request->id)->first();
        return view('detial.upp', ['items' => $items]);
    }
    public function uppdate(Request $request) {

        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'text' => $request->text,
            'date' => $request->date
        ];
        DB::table('favoitems')
        ->where('id', $request->id)
        ->update($param);

        return redirect()->to('todo/favo');
    }
    

    // public function delete(Request $request) {
    //     $items = DB::table('favoitems')
    //     ->where('id', $request->id)->first();
    //     return view('detial.upp', ['items' => $items]);
    // }
    public function remove(Request $request) {

        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'text' => $request->text,
            'date' => $request->date
        ];
        DB::table('favoitems')
        ->where('id', $request->id)
        ->delete($param);

        return redirect()->to('todo/favo');
    }


    
    public function memo() {
        return view('detial.memo');
    }
    public function seasoning(Request $request) {
        $seasonings = DB::table('seasoning_items')->get();

        return view('detial.seasoning',['seasonings' => $seasonings]);
    }

    public function login() {
        return view('auth.login');
    }
}
