<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    } 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
 
}
