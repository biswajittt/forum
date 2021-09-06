<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserQuesController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    $cat = DB::table('category')->get();
    return view('home', ['categories' => $cat]);
});

Route::get('/forum', [ForumController::class, 'getdata'])->name('forum');


Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('forum');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Auth::routes(['verify' => true]);


Route::middleware(['middleware' => ['verified']])->group(function () {
    $cat = DB::table('category')->get();
    return view('forum', ['categories' => $cat]);
});


Route::get('/questions', [QuestionsController::class, 'index'])->middleware(['auth', 'verified'])->name('questions');


Route::get('/questions', [QuestionsController::class, 'index'])->middleware(['auth', 'verified'])->name('questions');


Route::get('/question', [QuestionController::class, 'getQuesCom'])->middleware(['auth', 'verified'])->name('question');


Route::get('mydata', [UserQuesController::class, 'userQues'])->middleware(['auth', 'verified']);


Route::post('/question', [QuestionController::class, 'store'])->middleware(['auth', 'verified']);


Route::post('/questions', [QuestionController::class, 'store'])->middleware(['auth', 'verified']);


Route::post('/mydata', [QuestionController::class, 'store'])->middleware(['auth', 'verified']);


Route::post('/question', [QuestionController::class, 'store'])->middleware(['auth', 'verified']);


Route::get('mydata/{id}', [UserQuesController::class, 'deleted'])->middleware(['auth', 'verified']);