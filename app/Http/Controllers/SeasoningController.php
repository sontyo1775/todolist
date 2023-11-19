<?php

namespace App\Http\Controllers;
use App\Models\Seasoning;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeasoningController extends Controller
{
    
    public function seasoningadd(Request $request) {
        return view('seasonings.seasoning_create');
    }
    public function seasoningcreate(Request $request) {
        $param = [
            'name' => $request->name,
            'date' => $request->date,
        ];
        DB::table('seasoning_items')->insert($param);

        return redirect()->to('todo/seasoning');
    }


    public function seasoningdelete(Request $request) {

        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'date' => $request->date,
        ];
        DB::table('seasoning_items')
        ->where('id', $request->id)
        ->delete($param);

        return redirect()->to('todo/seasoning');
    }
}

