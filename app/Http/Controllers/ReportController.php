<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Report::create($validatedData);

        return back()->with('success', 'Report submitted successfully.');
    }
    public function delete($id)
    {
        $report = Report::findOrFail($id); 
        $report->delete();                  
        return redirect('dashboard')->with('success', 'Report deleted successfully.');
    }
}
