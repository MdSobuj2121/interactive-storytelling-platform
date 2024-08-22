<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\StoryNodeController;
use App\Http\Controllers\ChoiceController;

Route::get('/', [StoryController::class, 'index'])->name('stories.index');
Route::get('/stories/create', [StoryController::class, 'create'])->name('stories.create');
Route::post('/stories', [StoryController::class, 'store'])->name('stories.store');
Route::get('/stories/{story}', [StoryController::class, 'show'])->name('stories.show');

Route::get('/stories/{story}/nodes/create', [StoryNodeController::class, 'create'])->name('story-nodes.create');
Route::post('/stories/{story}/nodes', [StoryNodeController::class, 'store'])->name('story-nodes.store');
Route::get('/story-nodes/{node}', [StoryNodeController::class, 'show'])->name('story-nodes.show');

Route::post('/story-nodes/{node}/choices', [ChoiceController::class, 'store'])->name('choices.store');
