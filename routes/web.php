<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::all();
    return view('home',compact('categories'));
})->name('home');

Route::get('/articles', function () {
    return "articles";
})->name('articles');
Route::get('/books', function () {
    return "books";
})->name('books');
Route::get('/workshops', function () {
    return "workshops";
})->name('workshops');
Route::get('/conferences', function () {
    return "conferences";
})->name('conferences');
// Route::get('/categories', [CategoryController::class, 'category'])->name('categories.category');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/home', function () {
//     return 'home';
// })->middleware('age:50');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
