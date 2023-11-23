<?php

use Illuminate\Support\Facades\Route;

Route::view("/", 'home')->name('home');
Route::view("/about", 'about')->name('about');
Route::view("/history", 'history')->name('history');
Route::view("/books", 'books')->name('books');
Route::view("/work", 'work')->name('work');
Route::view("/achievements", 'achievements')->name('achievements');
