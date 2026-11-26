<?php

use Illuminate\Support\Facades\Route;

// トップページからログイン画面へ
Route::redirect('/', '/login');

// ログイン・新規登録・ログアウトなど
Auth::routes();

// 初期ホーム画面を表示
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ダッシュボードを表示
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('dashboard');
