<?php

use App\Http\Controllers\BotController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/webhook', [BotController::class, 'handle']);

