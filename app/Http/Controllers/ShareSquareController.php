<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\ShareSquare;

class ShareSquareController extends Controller
{
    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        try {
            $csvFile = $request->file('file');
            $csv = Reader::createFromPath($csvFile->getRealPath(), 'r');
            $csv->setHeaderOffset(0);

            foreach ($csv as $record) {
                ShareSquare::create([
                    'planid' => $record['planid'],
                    'firstname' => $record['firstname'],
                    'lastname' => $record['lastname'],
                    'email' => $record['email'],
                    'kpi' => $record['kpi'],
                    'value' => $record['value'],
                    'date' => $record['date'],
                ]);
            }

            return response()->json(['message' => 'CSV imported successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to import CSV', 'message' => $e->getMessage()], 500);
        }
    }
}
