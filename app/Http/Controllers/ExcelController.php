<?php

namespace App\Http\Controllers;

use App\Exports\WatchExport;
use App\Imports\WatchDataImport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExcelController extends Controller
{
    public function import(): void
    {
        Excel::import(new WatchDataImport(), 'proba.xlsx');
    }

    public function export(): BinaryFileResponse
    {
        return Excel::download(new WatchExport(), 'watches.xlsx');
    }
}
