<?php

namespace App\Http\Controllers;
use App\Models\Memoitem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function memoitem(Request $request) {
        $memoitems = Memoitem::all();
        return view('detial.memo', ['memoitems' =>  $memoitems]);
    }

    public function memofaile(Request $request) {
        $p = $request->id;
        $memofailes = Memoitem::find($p);
        return view('detial.memofaile', ['memofailes' => $memofailes]);
    }

    public function memoadd(Request $request) {
        return view('detial.memo_create');
    }
    public function memocreate(Request $request) {
        $param = [
            'name' => $request->name,
            'text' => $request->text,
            'title' => $request->title,
        ];
        DB::table('memoitems')->insert($param);

        return redirect()->to('todo/memos');
    }

    public function memoupp(Request $request) {
        $memoup = DB::table('memoitems')
        ->where('id', $request->id)->first();
        return view('detial.memo_up', ['memoup' => $memoup]);
    }
    public function memouppdate(Request $request) {

        $param = [
            'id' => $request->id,
            'title' => $request->title,
            'name' => $request->name,
            'text' => $request->text,
        ];
        DB::table('memoitems')
        ->where('id', $request->id)
        ->update($param);

        return redirect()->to('todo/memos');
    }


    public function memodelete(Request $request) {

        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'text' => $request->text,
            'title' => $request->text,
        ];
        DB::table('memoitems')
        ->where('id', $request->id)
        ->delete($param);

        return redirect()->to('todo/memos');
    }
}
