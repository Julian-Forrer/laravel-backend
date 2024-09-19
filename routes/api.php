<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareSquareController;
use Illuminate\Http\Request;

Route::post('/import-csv', [ShareSquareController::class, 'importCSV']);




// dit is het niet. 
// In routes/api.php
// Route::post('/import-csv', [ShareSquareController::class, 'importCSV'])->name('import-csv');