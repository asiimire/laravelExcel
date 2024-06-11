<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as ExcelFacade; // Alias the facade
use App\Imports\UsersImport;

class HomeController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        ExcelFacade::import(new UsersImport, request()->file('file'));

        return redirect()->back()->with('success', 'All good!');
    }

    public function view()
    {
        return view("importexportview");
    }

    public function export(Request $request)
    {

        return ExcelFacade::download(new UsersExport, 'users.xlsx');
    }
}
