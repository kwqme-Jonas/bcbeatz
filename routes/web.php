<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\pagesController;

route::get('/', [pagesController::class, 'home']);
route::get('/beats', [pagesController::class, 'beats']);
route::get('/contact', [pagesController::class, 'contact']);