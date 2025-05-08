<?php

use App\Http\Controllers\Api\TgWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/tg-webhook', [TgWebhookController::class, 'process']);
