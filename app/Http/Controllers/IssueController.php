<?php

namespace App\Http\Controllers;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function create(){
        return view('reportissue');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'nullable|string|max:255',
        'priority' => 'nullable|string|max:255',
    ]);

    Issue::create([
        ...$validated,
        'successfull_msg' => 'Issue reported successfully!'
    ]);

    return redirect()->back()->with('success', 'Thank you for reporting. Issue reported successfully!');
}

}

