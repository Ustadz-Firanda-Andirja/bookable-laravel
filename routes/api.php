<?php


use Illuminate\Support\Facades\Route;

Route::get('/category', \App\Actions\Category\Index::class);
Route::get('/category/{category}/books', \App\Actions\Category\Books::class);
Route::get('/book/{book}', \App\Actions\Book\Read::class);
Route::get('/table-of-content/{tableOfContent}', \App\Actions\TableOfContent\Read::class);
