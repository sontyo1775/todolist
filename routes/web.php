<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserContainer;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\SeasoningController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[IndexController::class, 'index'])->name('index');

// メモ一ビュー
// Route::get('todo/memo',[UserContainer::class,'memo'])->name('memo');
Route::get('todo/memos',[MemoController::class,'memoitem'])->name('memo');
Route::post('todo/memos',[MemoController::class,'memoitem'])->name('memo');
Route::get('memos/{id?}', [MemoController::class,'memofaile'])->name('memofaile');
Route::post('memos/{id?}', [MemoController::class,'memofaile'])->name('memofaile');

Route::get('memocreate', [MemoController::class, 'memoadd'])->name('memo.create');
Route::post('memocreate', [MemoController::class, 'memocreate'])->name('memo.create');
Route::get('memouppdate/{id?}', [MemoController::class, 'memoupp'])->name('memo.upp');
Route::post('memouppdate/{id?}', [MemoController::class, 'memouppdate'])->name('memo.uppdate');
Route::get('memodelete/{id?}', [MemoController::class, 'memodelete'])->name('memo.delete');
Route::post('memodelete/{id?}', [MemoController::class, 'memodelete'])->name('memo.delete');

// 調味料管理
Route::get('todo/seasoning',[UserContainer::class,'seasoning'])->name('seasoning');
Route::post('todo/seasoning',[UserContainer::class,'seasoning'])->name('seasoning');
Route::get('seasoningadd/', [SeasoningController::class, 'seasoningadd'])->name('seasoningadd');
Route::post('seasoningadd/', [SeasoningController::class, 'seasoningadd'])->name('seasoningadd');
Route::get('seasoningcreate/', [SeasoningController::class, 'seasoningcreate'])->name('seasoningcreate');
Route::post('seasoningcreate/', [SeasoningController::class, 'seasoningcreate'])->name('seasoningcreate');
Route::get('seasoningdelete/{id?}', [SeasoningController::class, 'seasoningdelete'])->name('seasoningdelete');
Route::post('seasoningdelete/{id?}', [SeasoningController::class, 'seasoningdelete'])->name('seasoningdelete');

// お気に入りリスト
Route::get('todo/favo',[UserContainer::class,'favo'])->name('favo');
Route::get('todo/favo',[UserContainer::class,'favoadd'])->name('favo');
// 新規　更新　削除
Route::get('todo/create',[UserContainer::class,'add'])->name('create');
Route::post('todo/create',[UserContainer::class,'create'])->name('create');
Route::get('uppdate/{id?}', [UserContainer::class, 'upp'])->name('upp');
Route::post('uppdate/{id?}', [UserContainer::class, 'uppdate'])->name('uppdate');
// Route::get('delete/{id?}', [UserContainer::class, 'delete'])->name('delete');
Route::post('delete/{id?}', [UserContainer::class, 'remove'])->name('remove');
Route::get('delete/{id?}', [UserContainer::class, 'remove'])->name('remove');



