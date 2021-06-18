<?php

use App\Item;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $items = Item::get();
    return view('welcome')->with('items', $items);
});

Route::get('/administrator', function () {
    return view('admin');
});