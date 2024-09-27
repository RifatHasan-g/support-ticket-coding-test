<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;


// Redirect after login
Route::get('/', function () {
    return redirect()->route('tickets.index');
})->middleware(['auth']); 

Route::middleware(['auth'])->group(function() {
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
    Route::patch('/tickets/{ticket}/close', [TicketController::class, 'close'])->name('tickets.close');
    Route::post('/tickets/{ticket}/respond', [TicketController::class, 'respond'])->name('tickets.respond');
});


require __DIR__.'/auth.php';
