<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Wagg\WhatAreYouDoingWhileWaitingForComposer\Post;
use Wagg\WhatAreYouDoingWhileWaitingForComposer\User;

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('home', compact('posts'));
});

Route::get('/connect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/connect/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::find($githubUser->id);

    if (null === $user) {
        $user = User::create([
            'github_user_id' => $githubUser->id,
            'github_username' => $githubUser->nickname,
            'email' => $githubUser->email,
        ]);
    } else {
        $user->update([
            'github_username' => $githubUser->nickname,
            'email' => $githubUser->email,
        ]);
    }

    Auth::login($user);

    return redirect('/');
});

Route::post('/post/store', function (Request $request) {
    Post::create([
        'user_id' => Auth::user()->github_user_id,
        'body' => $request->input('body'),
    ]);

    return redirect('/');
});