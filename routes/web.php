<?php

use Illuminate\Support\Facades\Route;
// use League\Csv\Query\Constraint\Offset;
use App\Http\Controllers\ShareSquareController;

Route::get('/', function () {
    return view('welcome');
    
});

// Route::get('/import-csv-form', function () {
//     return view('import-csv');  // Zorg ervoor dat je view-bestand correct is
// });

// Route::post('/import-csv', [ShareSquareController::class, 'importCSV'])->name('import.csv');


// Route::post('/', function () {
//     $csv=\League\Csv\Reader::createFromPath(request()->file(key:'csv_file')->getRealpath());
//     $csv->setHeaderOffset(offset:0);

    // dd($csv->getHeader());

    // dd(request()->file("cvs_file")->get());
    

    // foreach($csv as $record){

    //     dd($record);
    // }


    // Route::post('/', [ShareSquareController::class, 'importCSV']);

// });



