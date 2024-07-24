<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/posts/create', function () {
//     return view('posts.create');
// })->name('posts.create');

// Route::post('/posts', [PostsController::class, 'posts.store']);

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostsController::class, 'table'])->name('table');
    Route::post('/', [PostsController::class, 'store'])->name('store');
    Route::put('/', [PostsController::class, 'update'])->name('update');
    Route::get('/create', [PostsController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('edit');
    Route::delete('{id}', [PostsController::class, 'delete'])->name('delete');
});
// Route::post('/posts', function (Request $request) {
//     $request->validate([
//         'title' => 'required',
//         'description' => ['required', 'min:10']
//     ]);


//     return redirect()
//         ->route('posts.create')
//         ->with(
//             'success',
//             'Post is submitted! Title: ' . $request->input('title') .
//                 ' Description: ' . $request->input('description')
//         );
// })->name('posts.store');
